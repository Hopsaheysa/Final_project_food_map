import React from 'react'
import ReactDOM from 'react-dom'

import {
    BrowserRouter as Router,
    Switch,
    Route,
} from "react-router-dom";

import Review from './Review.jsx'


ReactDOM.render((
    <Router>
        <Switch>
            <Route path="/recipe/:recipeId" children={<Review />} />
        </Switch>
    </Router>

), document.getElementById('review'))