<!--
  Auteur Yirou
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <script src="assets/angular.js"></script>
    <script src="assets/myApp.js"></script>
    <link media="screen" href="assets/bootstrap.css" rel="stylesheet"/>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>

    <div class="container" ng-app="myApp">
        <hr>Coucou :)
        <hr>
        <section>
            <form class="form-inline" ng-controller="FormController" ng-submit="submitForm()" role="form" method="POST">
                <div class="form-group">
                    <label class="sr-only" for="Source Station">Insert Your name</label>
                    <input type="text" ng-model="name" placeholder="Yirou" class="form-control">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="Source Station">Insert Your City</label>
                    <input type="text" ng-model="city" placeholder="Chambery" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <hr>
                <pre class="alert alert-{{message}}">{{message}}</pre>
            </form>
        </section>
    </div>