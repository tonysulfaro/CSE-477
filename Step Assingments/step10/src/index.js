import $ from 'jquery';
import {Buttons} from './Buttons';
import './_clicker.scss';

import './_simon.scss';
import {Simon} from './Simon';

console.log('welcome from index.js');

$(document).ready(function() {
    new Buttons();
    new Simon('#simon');
});