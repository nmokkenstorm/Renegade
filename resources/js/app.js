/**
 * Create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from './components/App'
import React from 'react';
import ReactDOM from 'react-dom';

if (document.getElementById('react-root')) {
    ReactDOM.render(<App />, document.getElementById('react-root'));
}
