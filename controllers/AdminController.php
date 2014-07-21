<?php
class AdminController extends AppController
{
    static function home() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }

    static function listBoxes() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }

    static function showBox() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }

    static function createBox() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }

    static function editBox() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }

    static function deleteBox() {
        return self::template('home.html.twig', array(
            'page_title' => 'GM Home',
        ));
    }
}
?>
