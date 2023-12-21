<?php

/*
Plugin Name: Gizlilik Politikası Eklentisi
Description: Web sitesine otomatik gizlilik politikası eklemek için oluşturulan eklenti.
Version: 0.1
Author: Anıl Şahiner
*/

function sartlar_gizlilik_politikası(){
    return "Burada gizlilik politikası metni olacak";

}

function gizlilik_sozlesme_menu(){
    add_menu_page(
        'Sözleşme Ayarları',
        'Sözleşme',
        'manage_options',
        'sozlesme_ayarlari',
        'sozlesme_ayarlar_form'
    );
}

add_action('admin_menu', 'gizlilik_sozlesmesi_menu');

add_shortcode('gizlilik sozlesme', 'sartlar_gizlilik_politikası');