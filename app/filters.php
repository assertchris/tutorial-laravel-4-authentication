<?php

Route::filter("auth", function() {
  if (Auth::guest()) {
    return Redirect::route("user/login");
  }
});
