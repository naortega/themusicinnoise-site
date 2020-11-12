.PHONY: pages blog all clean

pages:
	mkdir -p output
	find pages -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait
	cp nicolas@ortegas.org_pub.asc style.css favicon.png output/

blog:
	mkdir -p output/blog
	find blog/posts -type f -name '*.cfg' -print0 | sort -zr | xargs -0 saait -o output/blog/ -t blog/templates/

all: pages blog

clean:
	rm -rf output
