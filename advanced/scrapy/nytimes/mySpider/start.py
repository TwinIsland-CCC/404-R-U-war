from scrapy import cmdline
cmdline.execute('scrapy crawl nytimes -o nytimes.json'.split())