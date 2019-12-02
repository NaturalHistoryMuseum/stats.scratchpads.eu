# Stats Aggregator

This is the new stats aggregator. It aims to be simpler, faster and more reliable than the previous one.
Somewhat backwards compatible.

## Services

The stats aggregator exposes an HTTP api that scratchpads can use to register for stats collection.
The collection service runs as a cron job on sites that have registered.
The resulting aggregated stats are exposed as JSON via the HTTP server.

## Library info & structure

The site uses the [Slim router library](https://www.slimframework.com/) to serve HTTP requests, set up and configured in `src/index.php`. It uses a simple callback-based configuration rather than MVC-class-declaration config. The collection script is at `/bin/collect`. Tests are run with the [kahlan library](https://kahlan.github.io/docs/), which uses `describe-it-expect` callback syntax. Run them with `vendor/bin/kahlan`; to see the code coverage use `vendor/bin/kahlan --coverage=4`. Tests must be in the `spec` directory and be of the form `*.spec.php`.

There is a simple wrapper around the data layer, in `src/Storage.php`. It exposes a few API functions the deal directly with the recording and fetching of stats. This allows the rest of the program to be agnostic of the data storage service (allowing us to switch it out later) while still allowing us to use the chosen storage solution in an efficient way.

Data is recorded as time series data; each sample is indexed by site and by capture date, and the statistics are stored as a json object. This is based on the assumption that the main filtering we'll want to do will be on the time axis, and filters about what individual statistics to display will be done by the user interface rather than the database API.