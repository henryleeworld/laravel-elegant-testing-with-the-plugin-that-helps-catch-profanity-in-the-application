<?php

namespace Tests\Feature;

test('check for profanity', function () {
   expect('App')->toHaveNoProfanity();
});
