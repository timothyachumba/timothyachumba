start: npm
	node node_modules/stylus/bin/stylus -w -c styles/styles.styl --out assets/build & node_modules/watchify/bin/cmd.js assets/js/index.js -o assets/js/index.dev.js

build: npm
	node node_modules/stylus/bin/stylus -c styles/styles.styl --out assets/build
	node node_modules/browserify/bin/cmd.js assets/js/index.js -t uglifyify -o assets/build/index.min.js

npm:
	npm install --quiet --production
