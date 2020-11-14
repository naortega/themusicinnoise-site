OUTPUT_DIR=output

.PHONY: pages blog all clean

pages:
	mkdir -p $(OUTPUT_DIR)
	find pages -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/
	cp nicolas@ortegas.org_pub.asc style.css favicon.png $(OUTPUT_DIR)

blog:
	mkdir -p $(OUTPUT_DIR)/blog
	find blog/posts -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o $(OUTPUT_DIR)/blog/ -t blog/templates/

all: pages blog

clean:
	rm -rf $(OUTPUT_DIR)
