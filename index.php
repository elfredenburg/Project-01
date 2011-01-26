<?php

/*
 * @todo: DkBck fmt tgs
 * @author: Elizabeth Fredenburg
 * Project 1
 * ANM 293: Advanced PHP
 */

/*
 * Initialise output buffering
 */
ob_start();

/*
 * Set buffer contents
 */
echo "My First Project with Output Buffering";

/*
 * Pull buffer contents
 */
$v = ob_get_contents();

/*
 * Erase and turn off buffer
 */
ob_end_clean();

/*
 * Output contents from buffer
 */
echo $v;
