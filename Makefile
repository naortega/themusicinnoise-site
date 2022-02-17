OUTPUT_DIR=./output

.PHONY: all pages blog sync clean

all: pages blog
	cp nicolas@ortegas.org_pub.asc style.css favicon.png profile.png $(OUTPUT_DIR)

pages:
	mkdir -p $(OUTPUT_DIR)
	find pages -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/

blog:
	mkdir -p $(OUTPUT_DIR)/blog
	cat templates/page/header.html blog/templates/index.html/header-part.html > blog/templates/index.html/header.html
	sed -i -e 's/\$${title}/Blog/' blog/templates/index.html/header.html
	cat blog/templates/index.html/footer-part.html templates/page/footer.html > blog/templates/index.html/footer.html
	find blog/posts -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/blog/ -t blog/templates/

sync: all
	rsync -avz --delete $(OUTPUT_DIR)/ nicolas@192.168.1.141::tmin-site

clean:
	rm -rf $(OUTPUT_DIR)
	rm -f blog/templates/index.html/header.html
	rm -f blog/templates/index.html/footer.html
