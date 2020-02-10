/* eslint-env browser */
/* globals FLOAAT_DIST_PATH */

/** Dynamically set absolute public path from current protocol and host */
if (FLOAAT_DIST_PATH) {
  __webpack_public_path__ = FLOAAT_DIST_PATH; // eslint-disable-line no-undef, camelcase
}
