const serve = require('serve');
const server = serve('.', {
    port: process.env.PORT || 3000,
    legacyRewrites: true,
});