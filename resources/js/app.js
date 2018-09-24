/**
 * Create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from './components/App'

import React from 'react';
import ReactDOM from 'react-dom';

import { Provider } from 'react-redux'
import { createStore, applyMiddleware } from 'redux';
import thunk from 'redux-thunk';
import reducer from './redux/reducers'

const store = createStore(reducer, applyMiddleware(thunk))

const app = <Provider store={store}>
    <App />
</Provider>
    
if (document.getElementById('react-root')) {
    ReactDOM.render(
        app,        
        document.getElementById('react-root')
    );
}
