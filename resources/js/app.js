import React from 'react';
import ReactDOM from 'react-dom';
import Home from './home';
import Page1 from './page1';

window.render = {
    home : (containerTag, title) => {
        ReactDOM.render(
            <Home title={title}/>,
            containerTag 
        )
    },
    page1 : (containerTag) => {
        ReactDOM.render(
            <Page1 />, 
            containerTag
        )
    }
}



