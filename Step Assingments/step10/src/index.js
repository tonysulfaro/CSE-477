import $ from 'jquery';
import {Buttons} from './Buttons';
import './_clicker.scss';

console.log('welcome from index.js');

$(document).ready(function() {
    new Buttons();
});