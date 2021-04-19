OUTPUT_DIR=./output

.PHONY: all pages blog sync clean

all: pages blog
	cp nicolas@ortegas.org_pub.asc style.css favicon.png $(OUTPUT_DIR)

pages:
	mkdir -p $(OUTPUT_DIR)
	find pages -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/

blog:
	mkdir -p $(OUTPUT_DIR)/blog
	find blog/posts -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/blog/ -t blog/templates/

sync: all
	rsync -avz --delete $(OUTPUT_DIR)/ nicolas@192.168.1.141::tmin-site

clean:
	rm -rf $(OUTPUT_DIR)
