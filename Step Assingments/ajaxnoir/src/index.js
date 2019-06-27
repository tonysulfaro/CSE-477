import './_noir.scss';
import {Login} from './Login';
import {Stars} from "./Stars";
import $ from 'jquery';

$(document).ready(function() {
    new Login("#login");
    new Stars('#stars');
});