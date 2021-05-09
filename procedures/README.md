## Installation and Usage

Simply clone Laravel direcrtory and `npm install` inside the `procedures` directory. This will install required modules from node pacakge manager.
Once installed you can perform `npm run watch` to see the build status and other errors regarding `Mix`.

1. Lastly don't forget to import the .sql (perform `npm artisan migrate` to import the sql tables).
2. Don't forget to change `.env`

```bash
# Simply Clone this repository
git clone https://github.com/ziaahsan/Laravel
cd procedures
# install the dependencies for both the server root package.json and
npm install . # More information https://docs.npmjs.com/cli/v6/commands/npm-install
npm artisan migrate
npm run watch

# Open another terminal and perform
npm artisan serve
```
---
