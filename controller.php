<?php            
namespace Concrete\Package\AcceleratedMobilePages;

use Package;
use \Concrete\Core\Page\Single as SinglePage;
use View;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

	protected $pkgHandle = 'accelerated_mobile_pages';
	protected $appVersionRequired = '5.7.4';
	protected $pkgVersion = '0.0.1';
	
	public function getPackageName() 
	{
		return t("Accelerated Mobile Pages");
	}

	public function getPackageDescription() 
	{
		return t("Accelerated Mobile Pages (AMP) support for Concrete5");
	}

	public function install() { 
		$pkg = parent::install();
    SinglePage::add('/dashboard/system/optimization/amp', $pkg);
	}

	public function uninstall() { 
		parent::uninstall();
	}

}