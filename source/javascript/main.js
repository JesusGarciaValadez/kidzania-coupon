//  @codekit-prepend "plugins.js";
/**
 *
 *  @function
 *  @description:   Anonimous function autoexecutable
 *  @params jQuery $.- An jQuery object instance
 *  @params window window.- A Window object Instance
 *  @author: @_Chucho_
 *
 */
( function ( $, window, document, undefined ) {
    //  Revisa la disponibilidad de localStorage
    var storage;
    if( 'localStorage' in window && window.localStorage !== null ) {
        storage = localStorage;
    } else {
        try {
            if ( localStorage.getItem ) {
                storage = localStorage;
            }
        } catch( e ) {
            storage = {};
        }
    }

    //  When DOM is loaded
    // $( function ( ) {

    // } );

    ( function () {
        var app = angular.module( 'KidzaniaApp', [] );

        app.controller( 'ContactController', function() {
            var contact = this;
            contact.received    = false;
        } );
    } )();

    //  When page is finished loaded
    $( document ).ready( function () {
        if ( $( 'input[type="checkbox"]' ).exists() ) {
            $( 'input[type="checkbox"]' ).uniform();
        }
    } );

} ) ( jQuery, window, document );