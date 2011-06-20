<?PHP

/**
* This is an example of my coding style
*
* This class really doesn't do any thing
*/
class Style
{
    /**
     * the value
     *
     * @var string
     */
    private $_value = '';
    
    /**
     * sets up our object
     *
     * @param string $val
     * @return Style the style object 
     * @author ישראל דוב לבו
     */
    function __construct($val=NULL)
    {
        if(!empty($val)){
            $this->_value = $val;
        }
        return $this;
    }
    
    /**
     * displays the class (like to string)
     *
     * @param string $return should we return the string , default is to print
     * @return bool|string the rendered string or false
     * @author ישראל דוב לבו
     */
    public function display($return=false)
    {
        //load the template
        $template = new Template();
        
        //set the template value
        $template->value = $this->_value;
        
        //should we print or return ?
        if (!$return) {
            echo $template->render();
        }
        else {
            $return = $template->render(); 
        }
        return $return;
    }
}
