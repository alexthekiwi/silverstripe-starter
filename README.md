# Silverstripe Starter

A base template for Silverstripe projects with:
1. PSR-4 autoloading
1. Laravel Mix
1. Vue.js
1. Tailwind CSS
1. Silverstripe Elemental
1. Eslint Config

## Installation ##

1. Create a database
2. Proceed to set up your local environment variables by duplicating the '.env.example' and renaming it '.env', after which you can edit accordingly.
3. Next, run the `npm install` command in the root directory of the project. This will install the necessary node modules/dependencies required.
4. Next, run the `npm run start` command in the root directory of the project. This will perform a one of dev compilation and create a `dist` folder in 
  the `site` folder located within the `themes` folder in the project root. This step is required to prevent composer from returning an error when you move to the next step.
5. The next step now is the run `composer install` command. This command will install all the necessary packages required for Silverstripe to work.
6. Next, hit the site in your browser and append `/dev/build?flush` to your local url link to build the database and get Silverstripe running in the browser.

## Hooray!!! You Successfully Got The Project Running ##

## Development ##
For a one of dev compilation, you can run the `npm run start` command. 

To start the watch script, run the `npm run dev` command. This command constantly watches your project for any new changes and rebuilds your files to reflect any changes.

## Production ##
For a minified production bundle, run the `npm run build` command. This command will get your dist folder and minify it. This gets it ready for the production environment.
