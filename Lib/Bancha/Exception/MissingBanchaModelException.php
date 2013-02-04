<?php

/**
 * Exception raised when a Model could not be found.
 *
 * @package       Bancha.Exception
 */
class MissingBanchaModelException extends MissingModelException {

        protected $_messageTemplate = 'Bancha Model %s could not be found. Maybe it is missing the Bancha Behavior';

}

