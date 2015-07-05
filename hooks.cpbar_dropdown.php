<?php
/**
 * Hooks_cpbar_dropdown
 * Convert CP bar nav to dropdown
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.2       Grouped Profile, View Site and Logout to another dropdown, markerd as Tools
 * 1.0.1       Updated styling per Mike Martin's suggestion. Separated adons from core functions
 * 1.0.0       Initial release
 */

class Hooks_cpbar_dropdown extends Hooks 
{

    public function control_panel__add_to_head(){
        return $this->css->link('cpbar_dropdown');
    }

    public function control_panel__add_to_foot()
    {
        return $this->js->link('cpbar_dropdown');
    }
}