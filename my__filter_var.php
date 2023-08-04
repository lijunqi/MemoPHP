<?php
echo "1. ".filter_var("asdf", FILTER_SANITIZE_NUMBER_INT)."\n";
echo "2. ".filter_var("123", FILTER_SANITIZE_NUMBER_INT)."\n";
echo "3. ".intval(filter_var("A-123", FILTER_SANITIZE_NUMBER_INT))."\n";
echo "4. ".intval(filter_var("a 123", FILTER_SANITIZE_NUMBER_INT))."\n";
echo "5. ".intval(filter_var("DevSa1", FILTER_SANITIZE_NUMBER_INT))."\n";