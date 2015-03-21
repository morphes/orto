<?php

class Company_Web_Adminhtml_WebController extends Mage_Adminhtml_Controller_action
{

    protected function _initAction() {
        $this->loadLayout()->_setActiveMenu('web/items')->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function kancAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Импорт товаров:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/kancparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filekanc"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function booksAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Импорт Книг:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/booksparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filebooks"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function suvenirAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Импорт Сувенирной Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/suvenirparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filesuvenir"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function kidsAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Импорт Разивающей Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/kidsparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filekids"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricekancAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Загрузить Прайс Канцелярии:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricekanc') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricekanc"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricebooksAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Загрузить Прайс Книг:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricebooks') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricebooks"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricesuvenirAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Загрузить Прайс Сувенирной Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricesuvenir') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricesuvenir"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricekidsAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('
                   <h1>Загрузить Прайс Развивающей Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricekids') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricekids"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function successAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('<h1>Файл успешно загружен</h1>');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function kancparseAction() {
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filekanc']['tmp_name'], true, "UTF-8");

        $result = array();
        $brand = array('1' => 'Обувь ORTEK', '4' => 'Обувь SursilOrtho', '2' => 'Обувь ОРТОДОН', '3' => 'Обувь ТОТТО');
        $categories = array('Обувь ORTEK' => '4', 'Обувь SursilOrtho' => '5', 'Обувь ОРТОДОН' => '6', 'Обувь ТОТТО' => '7' );
        $dop = array('2' => 'Байка', '5' => 'Бумазея', '1' => 'Кож.подкл.', '3' => 'Мех', '4' => 'Шерсть', '6' => 'Кож.подкладка/Байка');
        $model = array('3' => 'Ботинки', '2' => 'Кроссовки', '1' => 'Сандалии', '4' => 'Сапоги', '7' => 'п.ботинки', '6' => 'Полусапоги', '5' => 'туфли');
        $gender = array('1' => 'Женская', '2' => 'Мужская', '3' => 'Унисекс');
        $season = array('3' => 'Демисезон', '2' => 'Зима', '1' => 'Лето');
        $character = array('1' => 'Высокий жесткий берец', '2' => 'Профилактика', '5' => 'Антиварусная', '4' => 'Комфортная обувь', '3' => 'Лечебная');
        $color = array(
            '1' => 'Белый', 
            '6' => 'Белый/серый', 
            '16' => 'белый\серебро', 
            '5' => 'Зеленый', 
            '2' => 'Красный', 
            '8' => 'роз\белый\бежевый', 
            '13' => 'розовый', 
            '17' => 'розовый\белый', 
            '12' => 'розовый\серебро\белый', 
            '3' => 'Синий', 
            '9' => 'синий\бежевый', 
            '11' => 'синий\голубой', 
            '18' => 'сиреневый\розовый', 
            '7' => 'т.синий\белый\беж', 
            '19' => 'т.синий\голубой\белый', 
            '10' => 'т.синий\синий\белый', 
            '15' => 'фуксия\белый', 
            '14' => 'фуксия\розовый', 
            '20' => 'хаки\бежевый', 
            '4' => 'Черный',
            '52' => 'белый/розовый/фуксия',
            '51' => 'белый/св.розовый/розовый', 
            '87' => 'белый/синий',
            '56' => 'белый/сиреневый',
            '88' => 'Cиний/желтый/красный', 
            '84' => 'байка/белый/зеленый',
            '78' => 'беж/син/т.син', 
            '187'=> 'бежевывй/коричневый/коралл',
            '31' => 'бежевый',
            '185'=> 'бежевый/белый/т.синий',
            '48' => 'бежевый/коричневый',
            '186'=> 'бежевый/коричневый/голубой',
            '70' => 'бежевый/молочный',
            '21' => 'бежевый/розовый/фуксия',
            '98' => 'бежевый/хаки',
            '148'=> 'Бежевый/Хаки/Оранжевый',
            '115'=> 'белый/голуюой/оранжевый',
            '147'=> 'Белый/Желтый',
            '45' => 'белый/красный',
            '188'=> 'белый/красный/голубой/синий',
            '61' => 'белый/красный/черный',
            '155'=> 'Белый/Оранжевый',
            '102'=> 'белый/пион',
            '82' => 'белый/разноцветные цветы',
            '42' => 'белый/розовый',
            '16' => 'белый/серебро', 
            '184'=> 'белый/сиреневый/пион',
            '106'=> 'белый/фуксия',
            '28' => 'белый\светло-розовый',
            '30' => 'белый\черный',
            '113'=> 'Бордовый',
            '151'=> 'голубой',
            '36' => 'голубой/белый',
            '138'=> 'Голубой/Джинс',
            '144'=> 'Голубой/Оранжевый',
            '111'=> 'голубой/синий',
            '58' => 'голубой/синий/т.синий', 
            '55' => 'голубой/т.синий',
            '175'=> 'Горчичный/Зеленый/Желтый',
            '149'=> 'графит/серебро',
            '107'=> 'грейпфрут/белый',
            '173'=> 'джинс/рыжий',
            '132'=> 'джинс/серый',
            '131'=> 'ирис/лиловый',
            '86' => 'Коричневый',
            '71' => 'коричневый/беж/оранжевый',
            '154'=> 'Коричневый/Красный',
            '53' => 'коричневый/орнжевый',
            '33' => 'коричневый\бежевый',
            '37' => 'красный/белый',
            '105'=> 'красный/золотой',
            '103'=> 'красный/коралл/белый',
            '177'=> 'Красный/Королл',
            '156'=> 'красный/молочный',
            '158'=> 'красный/розовый/белый/зеленый',
            '146'=> 'Красный/Серебро',
            '96' => 'красный/т.красный',
            '162'=> 'Красный/Фиолетовый',
            '27' => 'красный\бежевый',
            '168'=> 'лиловый',
            '118'=> 'малиновый',
            '91' => 'мармелад',
            '161'=> 'Молочный/Коричневый',
            '72' => 'молочный/оранжевый',
            '77' => 'молочный/оранжевый/синий',
            '153'=> 'морская волна/белый',
            '68' => 'персиковый/бежевый',
            '152'=> 'пион/белый',
            '69' => 'розовый/бежевый',
            '40' => 'розовый/белый/фуксия',
            '182'=> 'розовый/бордовый',
            '124'=> 'розовый/металлик',
            '64' => 'розовый/персиковый',
            '74' => 'розовый/персиковый/белый',
            '99' => 'розовый/пион',
            '75' => 'розовый/пион/белый',
            '129'=> 'розовый/с блестками',
            '65' => 'розовый/св.розовый', 
            '39' => 'розовый/серый',
            '25' => 'розовый/сиреневый',            
            '43' =>  'розовый/сирень/белый',
            '67' => 'розовый/фуксия',
            '120'=> 'розовый/фуксия/белый',
            '179'=> 'розовый/фуксия/пион',
            '23' => 'розовый\сирень\бежевый',
            '29' => 'светло-розовый',
            '130'=> 'светло-сиреневый',
            '119'=> 'Серый',
            '183'=> 'серый/белый',
            '112'=> 'серый/голубой',
            '114'=> 'Серый/Голубой/Оранжевый',
            '116'=> 'Серый/Красный',
            '150'=> 'Серый/Лайм',
            '143'=> 'Серый/Пион',
            '127'=> 'серый/салат',
            '83' => 'серый/синий',
            '159'=> 'Серый/Синий/Белый',
            '38' => 'серый/синий/оранжевый',
            '79' => 'серый/т.синий/красный',
            '110'=> 'Серый/Черный',
            '66' => 'синий/бежевый',
            '100'=> 'синий/белый',
            '135'=> 'Синий/Белый/Желтый',
            '145'=> 'Синий/Белый/Зеленый',
            '59' => 'синий/белый/красный',
            '34' => 'синий/белый/красный/голубой',
            '22' => 'синий/белый/серый',
            '174'=> 'Синий/Голубой/Бежевый',
            '134'=> 'Синий/Горчичный',
            '44' => 'синий/красный/зеленый',
            '63' => 'синий/молочный',
            '89' => 'синий/оранжевый',
            '50' => 'синий/серый',
            '54' => 'синий/серый/голубой',
            '178'=> 'синий/хаки',
            '41' => 'синий/черный/оранжевый',
            '125'=> 'Синий/Черный/Серый',
            '24' => 'синий\красный\бежевый',
            '47' => 'сиреневый',
            '90' => 'сиреневый/белый',
            '126'=> 'сиреневый/перламутр',
            '85' => 'сиреневый/розовый/серый',
            '49' => 'сиреневый/серый',
            '95' => 'сирень/белый/фуксия',
            '46' => 'сирень/пион', 
            '92' => 'т.розовый',
            '180'=> 'т.серый',
            '176'=> 'т.синий',
            '76' => 'т.синий/бежевый',
            '141'=> 'т.синий/белый',
            '181'=> 'т.синий/белый/голубой',
            '60' => 'т.синий/голубой',
            '167'=> 'т.синий/молочный',
            '109'=> 'т.синий/оранжевый',
            '62' => 'т.синий/оранжевый/бежевый',
            '93' => 'т.синий/синий',
            '128'=> 'т.синий/синий/голубой',
            '142'=> 'т.сиреневый/сиреневый',
            '163'=> 'Фиолетовый',
            '117'=> 'фуксия',
            '122'=> 'фуксия/металлик',
            '121'=> 'фуксия/сиреневый',
            '169'=> 'фуксия\пион',
            '32' => 'хаки',
            '137'=> 'хаки/белый',
            '57' => 'хаки/желтый',
            '101'=> 'хаки/зеленый',
            '104'=> 'хаки/лайм',
            '97' => 'хаки/оранжевый',
            '172'=> 'Хаки/Рыжий',
            '35' => 'хаки/черный/оранжевый',
            '171'=> 'Черный/Бежевый',
            '165'=> 'Черный/Красный',
            '140'=> 'Черный/Оранжевый',
            '160'=> 'Черный/Серый',
            '80' => 'черный/серый/красный',
            '81' => 'черный/серый/оранжевый',
            '133'=> 'черный/фуксия',
            '26' => 'черный\синий',
            '170'=> 'черный\хаки\бежевый', 
            '428'=> 'баклажан',
            '214'=> 'баклажан/фуксия',
            '383'=> 'бежев./оливковый/оранж',
            '216'=> 'бежевый/молочный-коричневый',
            '325'=> 'бежевый/оранжев/золото',
            '393'=> 'бежевый/оранжевый/белый',
            '215'=> 'бежевый/перламутр',
            '312'=> 'бежевый/синий/красный',
            '298'=> 'бежевый/т.коричневый',
            '346'=> 'бежевый/т.коричневый/оранж',
            '370'=> 'бежеый/белый/розовый',
            '275'=> 'белый(с сиренев.колечком)',
            '276'=> 'белый(с цветами)',
            '277'=> 'белый(снежинки)',
            '189'=> 'белый/бежевый/красный',
            '394'=> 'белый/бежевый/розовый',
            '329'=> 'белый/бирюза',
            '200'=> 'белый/бирюза/желтый',
            '219'=> 'белый/бирюза/лимонный',
            '220'=> 'белый/бирюза/салат',
            '330'=> 'белый/голубой',
            '366'=> 'белый/голубой/красный',
            '221'=> 'белый/голубой/оранжевый',
            '147'=> 'белый/желтый',
            '217'=> 'белый/желтый/голубой',
            '386'=> 'белый/зеленый',
            '222'=> 'белый/золото/красный',
            '218'=> 'белый/лак',
            '406'=> 'белый/лимон',
            '415'=> 'белый/оранжевый/зеленый',
            '198'=> 'белый/перламутр',
            '223'=> 'белый/розовый(с вышивкой)',
            '224'=> 'белый/розовый(цветок)',
            '323'=> 'белый/розовый/серебро',
            '411'=>'белый/салатовый',
            '225'=>'белый/св.голубой',
            '226'=>'белый/св.голубой/василек',
            '28'=>'белый/св.розовый',
            '302'=>'белый/серебро/голубой',
            '6'=>'белый/серый',
            '424'=>'белый/синий/серебро/зеленый/красный',
            '408'=>'белый/сиреневый/фуксия',
            '227'=>'белый/сирень/серебро',
            '324'=>'белый/т.синий',
            '341'=>'белый/фиолеьлвый',
            '208'=>'белый/черный/красный',
            '213'=>'бирюза/белый',
            '228'=>'бирюза/бирюза',
            '289'=>'бордо/красный',
            '229'=>'бордо/фуксия',
            '402'=>'бордовый/коралл/белый',
            '294'=>'бордовый/розовый',
            '278'=>'бронза/коричневый',
            '345'=>'бронза/сирень',
            '230'=>'брусника/розовый',
            '385'=>'василек',
            '231'=>'василек/бежевый/серебро',
            '328'=>'василек/т.синий/желтый',
            '327'=>'голуб.,св.желт.,оранж.',
            '339'=>'голубой/белый/оранж',
            '303'=>'голубой/голубой',
            '315'=>'голубой/розовый',
            '232'=>'голубой/розовый/желтый',
            '382'=>'голубой/синий/красный',
            '252'=>'джинс/бежевый',
            '199'=>'джинс\оранжевый',
            '304'=>'желтый/белый',
            '410'=>'желтый/салатовый',
            '396'=>'зеленый/бежевый/оранжевый',
            '405'=>'зеленый/желтый/белый',
            '404'=>'золотистый/бордовый/белый',
            '194'=>'золото',
            '426'=>'золото/беж/оранж',
            '391'=>'золото/оранж/молочный',
            '392'=>'золото/беж/оранжевый',
            '374'=>'кор./беж./бирюза',
            '384'=>'Коралл',
            '395'=>'Коралл/бежевый',
            '234'=>'коралл/бежевый/золото',
            '235'=>'коралл/белый',
            '233'=>'коралл/коричневый/леопард',
            '416'=>'коралл/молочный/белый',
            '413'=>'коралл/молочный/золотистый',
            '236'=>'корич/беж/красная кожа+нубук',
            '354'=>'коричн/кэмэл/бежевый',
            '365'=>'коричневый/бежевый',
            '238'=>'коричневый/бежевый/красный',
            '279'=>'коричневый/зеленый',
            '237'=>'коричневый/оливковый',
            '239'=>'коричневый/розовый',
            '313'=>'коричневый/розовый/белый',
            '388'=>'кр./беж./кор/бордо',
            '331'=>'красн/мол/син/черн',
            '389'=>'красный лак',
            '340'=>'красный/золото/серебро',
            '195'=>'красный/молочный/белый',
            '361'=>'красный/розовый',
            '423'=>'красный/розовый перламутр',
            '355'=>'красный/св.бежевый',
            '286'=>'красный/серебро/черный',
            '96'=>'красный/т.красный',
            '162'=>'Красный/Фиолетовый',
            '27'=>'красный\бежевый',
            '272'=>'кэмэл/т.синий/красный',
            '168'=>'лиловый',
            '190'=>'лимоннный/оранжевый/голубой',
            '351'=>'мол./коричн./оранж',
            '335'=>'молочн/св.кор/оранж',
            '300'=>'молочный',
            '201'=>'молочный/белый/черный',
            '161'=>'Молочный/Коричневый',
            '72'=>'молочный/оранжевый',
            '240'=>'молочный/оранжевый/серый',
            '326'=>'молочный/св.коричневый',
            '241'=>'молочный/т.коричневый',
            '280'=>'молочный/фксия/сирень',
            '280'=>'молочный/черный',
            '320'=>'нежн розов/коралл/бир',
            '314'=>'оливковый/бежевый',
            '347'=>'оливковый/милитари',
            '369'=>'оливковый/св.коричневый',
            '242'=>'оранжевый/розовый/серебро',
            '334'=>'роз./роз.',
            '422'=>'роз.перламутр/серебро',
            '299'=>'розовый диско',
            '390'=>'розовый лак',
            '363'=>'розовый перламутр',
            '17'=>'розовый/белый',
            '73'=>'розовый/белый/сиреневый',
            '322'=>'розовый/белый/фусия ЛАК',
            '197'=>'розовый/бирюза',
            '350'=>'розовый/желт',
            '414'=>'розовый/красный',
            '348'=>'розовый/милитари',
            '243'=>'розовый/перламутр',
            '421'=>'розовый/перламутр/белый',
            '371'=>'розовый/розовый/белый',
            '209'=>'розовый/серебро',
            '381'=>'розовый/т.розовый',
            '245'=>'розовый/фукисия/салат',
            '244'=>'розовый/фуксия перламутр',
            '427'=>'рыжий/нубук/шерсть',
            '306'=>'св.голубой/голубой',
            '248'=>'св.голубой/св.розовый/св.желтый',
            '247'=>'св.коричневый/розовый',
            '246'=>'св.молочный/коричневый/леопард',
            '336'=>'св.молочный/синий/красный/голубой',
            '337'=>'св.розовый',
            '296'=>'св.серый/берюза',
            '290'=>'св.серый/салат',
            '352'=>'св.серый/т.синий',
            '202'=>'св.сиреневый/т.сиреневый',
            '212'=>'серый/белый/оранжевый',
            '211'=>'серый/зеленый',
            '338'=>'серый/оранжевый',
            '203'=>'серый/оранжевый/белый',
            '291'=>'серый/салат',
            '362'=>'серый/св.коричневый',
            '159'=>'серый/синий/белый',
            '403'=>'серый/т.синий/белый',
            '79'=>'серый/т.синий/красный',
            '356'=>'серый/фуксия',
            '110'=>'серый/черный',
            '204'=>'синий/бежевый/красный',
            '407'=>'синий/белый/голубой',
            '249'=>'синий/василек',
            '372'=>'синий/василек/белый',
            '11'=>'синий/голубой',
            '401'=>'синий/голубой/белый',
            '205'=>'синий/голубой/красный',
            '206'=>'синий/голубой/оранжевый',
            '419'=>'синий/джинс',
            '88'=>'синий/желтый/красный',
            '387'=>'синий/зеленый',
            '273'=>'синий/красный',
            '364'=>'синий/красный/молочный',
            '357'=>'синий/молочный/оранжевый',
            '250'=>'синий/оранжевый/бежевый',
            '349'=>'синий/оричневый/молочный',
            '196'=>'синий/салатовый',
            '251'=>'синий/серебро',
            '253'=>'синий/серебро/белый',
            '380'=>'синий/фуксия',
            '254'=>'сиреневый лак',
            '18'=>'сиреневый/розовый',
            '418'=>'сирень',
            '293'=>'сирень/бирюза',
            '46'=>'сирень/пион',
            '292'=>'сирень/розовый',
            '193'=>'т.голубой/бирюз/жел/сал',
            '307'=>'т.голубой/голубой',
            '412'=>'т.зеленый/бежевый/золотистый',
            '373'=>'т.коричневый',
            '255'=>'т.коричневый/бежевый',
            '281'=>'т.коричневый/коричневый',
            '282'=>'т.коричневый/коричневый с черной отделкой',
            '283'=>'т.красный',
            '398'=>'т.розовый/розовый',
            '417'=>'т.серый/св.серый/берюзовый',
            '259'=>'т.синий/бежевый/красный',
            '261'=>'т.синий/белый/красный',
            '318'=>'т.синий/василек',
            '256'=>'т.синий/василек/салат',
            '260'=>'т.синий/голубой/белый',
            '420'=>'т.синий/голубой/красный/белый',
            '425'=>'т.синий/голубой/оранжевый',
            '263'=>'т.синий/голубой/серебро',
            '284'=>'т.синий/красный',
            '316'=>'т.синий/красный',
            '368'=>'т.синий/красный/желтый',
            '353'=>'т.синий/красный/мол',
            '308'=>'т.синий/молочный/св.коричневый',
            '257'=>'т.синий/оливковый',
            '309'=>'т.синий/св.серый',
            '360'=>'т.синий/св.серый/красный',
            '288'=>'т.синий/серебро/черн',
            '379'=>'т.синий/серый',
            '258'=>'т.синий/серый/желтый',
            '310'=>'т.синий/серый/коричневый',
            '319'=>'т.синий/фуксия',
            '399'=>'т.сирень',
            '264'=>'т.фиолетовый/золото',
            '265'=>'фиолетовый/золото',
            '117'=>'фуксия',
            '266'=>'фуксия/баклажан/розовый',
            '297'=>'фуксия/белый',
            '267'=>'фуксия/оранжевый/салатовый',
            '285'=>'фуксия/розовый',
            '400'=>'фуксия/розовый перламутр',
            '192'=>'фуксия/розовый/бирюза',
            '191'=>'фуксия/розовый/голубой',
            '268'=>'фуксия/сиреневый/розовый',
            '15'=>'фуксия\белый',
            '169'=>'фуксия\пион',
            '20'=>'хаки/бежевый',
            '137'=>'хаки/белый',
            '332'=>'черн/св.коричн',
            '344'=>'черный лак',
            '171'=>'черный/бежевый',
            '270'=>'черный/белый лак',
            '317'=>'черный/бордо',
            '375'=>'черный/красный/серебро',
            '377'=>'черный/красный/серебро',
            '359'=>'черный/мол/красный',
            '311'=>'черный/молочный',
            '321'=>'черный/оливковый',
            '358'=>'черный/оливковый/бежевый',
            '140'=>'Черный/Оранжевый',
            '274'=>'черный/св.серый/бирюза',
            '343'=>'черный/серебро',
            '376'=>'черный/серебро(красный)',
            '160'=>'черный/серый',
            '397'=>'черный/синий перламутр',
            '269'=>'черный/т.василек',
            '271'=>'черный/т.серый',
            '262'=>'черный\белый',            
        );

        $brand_value = '';
        $dop_value = '';
        $model_value = '';
        $gender_value = '';
        $season_value = '';
        $character_value = '';
        $color_value = '';
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $result[$i]['sku'] = $data->val($i, B);
            $result[$i]['artikul'] = '' . $data->val($i, C);
            $result[$i]['price'] = $data->val($i, F);
            if (isset($brand[$data->val($i, G)])) {
                if ($data->val($i, G) == '3') {
                    $arr_nomenklaturaname = explode(' ', $data->val($i, A));
                    if (isset($arr_nomenklaturaname[0])) {
                        $result[$i]['artikul'] = '' . $arr_nomenklaturaname[0];
                    }
                }
                $brand_value = $brand[$data->val($i, G)];
            }
            $result[$i]['brand'] = $brand_value;
            if (isset($season[$data->val($i, I)])) {
                $season_value = $season[$data->val($i, I)];
            }
            $result[$i]['season'] = $season_value;
            if (isset($character[$data->val($i, K)])) {
                $character_value = $character[$data->val($i, K)];
            }
            $result[$i]['character'] = $character_value;
            if (isset($gender[$data->val($i, M)])) {
                $gender_value = $gender[$data->val($i, M)];
            }
            $result[$i]['gender'] = $gender_value;
            if (isset($model[$data->val($i, O)])) {
                $model_value = $model[$data->val($i, O)];
            }
            $result[$i]['model'] = $model_value;
            if (isset($color[$data->val($i, Q)])) {
                $color_value = $color[$data->val($i, Q)];
            }
            $result[$i]['color'] = $color_value;
            if (isset($dop[$data->val($i, S)])) {
                $dop_value = $dop[$data->val($i, S)];
            }

            $result[$i]['dop'] = $dop_value;
            $result[$i]['size'] = $data->val($i, V);
            $result[$i]['code_color'] = $data->val($i, S);
            $result[$i]['name'] = $data->val($i, W);
            $result[$i]['qty'] = $data->val($i, X);
            // $result[$i]['image'] = $data->val($i, U);
            $img = $data->val($i, U);

            if(!file_exists(trim(Mage::getBaseDir('media').'/import/'.$img))) {
                
                    $result[$i]['image'] = str_replace('jpg', 'JPG', $img);
                    $result[$i]['small_image'] = str_replace('jpg', 'JPG', $img);
                    $result[$i]['thumbnail'] = str_replace('jpg', 'JPG', $img);
                
                
            } else {
                $result[$i]['image'] = $img;
                $result[$i]['small_image'] = $img;
                $result[$i]['thumbnail'] = $img;
            }            
        }        
        
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        $csv = array();

        $csv[0][] = "'sku'";
        $csv[0][] = "'type'";
        $csv[0][] = "'attribute_set'";
        $csv[0][] = "'tax_class_id'";
        $csv[0][] = "'status'";
        $csv[0][] = "'weight'";
        $csv[0][] = "'name'";
        $csv[0][] = "'price'";
        $csv[0][] = "'description'";
        $csv[0][] = "'short_description'";
        $csv[0][] = "'category_ids'";
        $csv[0][] = "'visibility'";
        //        $csv[0][] = "'code'";
        //        $csv[0][] = "'qty_in_pack'";
        $csv[0][] = "'is_in_stock'";
        $csv[0][] = "'qty'";
        $csv[0][] = "'websites'";
        $csv[0][] = "'store_id'";
        $csv[0][] = "'image'";
        $csv[0][] = "'thumbnail'";
        $csv[0][] = "'small_image'";
        $csv[0][] = "'artikul'";
        $csv[0][] = "'brand'";
        $csv[0][] = "'season'";
        $csv[0][] = "'character'";
        $csv[0][] = "'gender'";
        $csv[0][] = "'model'";
        $csv[0][] = "'color'";
        $csv[0][] = "'dop'";
        $csv[0][] = "'size'";
        $csv[0][] = "'configurable_attributes'";
        $csv[0][] = "'simples_skus'";
        $csv[0][] = "'super_attribute_pricing'";
        $i = 1;

        for ($id = 2; $id < $data->rowcount() + 1; $id++) {
            $price = str_replace(" ", ".", $result[$id]['price']);
            //$qty = str_replace("Имеется в наличии", "100", $data->val($id, B));
            $qty = 100;
            $category = $categories[trim($result[$id]['brand'])];
            $csv[$i][] = "'" . trim($result[$id]['artikul']) . trim($result[$id]['size']) . trim($result[$id]['code_color']) . "'"; //sku
            $csv[$i][] = "'simple'"; //type
            $csv[$i][] = "'Обувь'"; //attribut_set
            $csv[$i][] = "'Taxable Goods'"; //tax_class_id
            $csv[$i][] = "'Включено'"; //status
            $csv[$i][] = "'2'"; //weight
            $csv[$i][] = "'" . trim($result[$id]['name']) . "'"; //name
            $csv[$i][] = "'" . $price . "'"; //price
            $csv[$i][] = "''"; //description
            $csv[$i][] = "''"; //short description
            $csv[$i][] = "'$category'"; //category_ids
            $csv[$i][] = "'Каталог, поиск'"; //visibility
            //            $csv[$i][] = "'" . trim($data->val($id, D)) . "'";
            //            $csv[$i][] = "'" . trim($data->val($id, F)) . "'";
            $csv[$i][] = "'1'"; //is_in_stock
            $csv[$i][] = "'" . trim($result[$id]['qty']) . "'"; //qty
            $csv[$i][] = "'base'"; //websites
            $csv[$i][] = "'default'"; //store_id
            $csv[$i][] = "'/" . trim($result[$id]['image']) . "'"; //image
            $csv[$i][] = "'/" . trim($result[$id]['small_image']) . "'"; //small_image
            $csv[$i][] = "'/" . trim($result[$id]['thumbnail']) . "'"; //thumbnail
            $csv[$i][] = "'" . trim($result[$id]['artikul']) . "'"; //artikul
            $csv[$i][] = "'" . trim($result[$id]['brand']) . "'"; //brand
            $csv[$i][] = "'" . trim($result[$id]['season']) . "'"; //season
            $csv[$i][] = "'" . trim($result[$id]['character']) . "'"; //character
            $csv[$i][] = "'" . trim($result[$id]['gender']) . "'"; //gender
            $csv[$i][] = "'" . trim($result[$id]['model']) . "'"; //model
            $csv[$i][] = "'" . trim($result[$id]['color']) . "'"; //color
            $csv[$i][] = "'" . trim($result[$id]['dop']) . "'"; //dop
            $csv[$i][] = "'" . trim($result[$id]['size']) . "'"; //size
            $csv[$i][] = "''"; //configurable attributs
            $csv[$i][] = "''"; //simples_skus
            $csv[$i][] = "''"; //super attribute pricing
            $i++;
        }    

        $configurables_products = array();
        foreach ($csv as $product) {
            if ($product['19'] != "'artikul'") {
                if (!isset($configurables_products[$product['19']][$product['0']])) {
                    $configurables_products[$product['19']][$product['0']][] = $product['7'];
                    $configurables_products[$product['19']][$product['0']][] = $product['27'];
                    $configurables_products[$product['19']][$product['0']][] = $product['16'];
                    $configurables_products[$product['19']][$product['0']][] = $product['20'];
                    $configurables_products[$product['19']][$product['0']][] = $product['21'];
                    $configurables_products[$product['19']][$product['0']][] = $product['22'];
                    $configurables_products[$product['19']][$product['0']][] = $product['23'];
                    $configurables_products[$product['19']][$product['0']][] = $product['24'];
                    $configurables_products[$product['19']][$product['0']][] = $product['25'];
                    $configurables_products[$product['19']][$product['0']][] = $product['26'];
                    $configurables_products[$product['19']][$product['0']][] = $product['10'];
                }
            }
        }            

        foreach ($configurables_products as $key => $c_product) {

            $simples_skus = '';
            $price = '';
            $image = '';
            $price_global = 0;
            $sku = str_replace("'", '', $key);
            $size = "size::";
            $count = 0;
            foreach ($c_product as $c_key => $c_value) {
                if ($count == 0) {
                    $price_global = (int)str_replace("'", '', $c_value['0']);
                }
                if ((int)str_replace("'", '', $c_value['0']) < (int)str_replace("'", '', $price_global)) {
                    $price_global = (int)str_replace("'", '', $c_value['0']);
                }
                $count++;
            }
            foreach ($c_product as $c_key => $c_value) {
                $simples_skus .= str_replace("'", '', $c_key) . ',';
                $price = $c_value['0'];
                $size .= str_replace("'", '', $c_value['1']) . ':' . ((int)str_replace("'", '', $price) - (int)str_replace("'", '', $price_global)) . ';';
                $image = $c_value['2'];

            }
            $brand = $c_product[$c_key][3];
            $season = $c_product[$c_key][4];
            $character = $c_product[$c_key][5];
            $gender = $c_product[$c_key][6];
            $model = $c_product[$c_key][7];
            $color = $c_product[$c_key][8];
            $dop = $c_product[$c_key][9];
            $cat = $c_product[$c_key][10];
            $csv[$i][] = "'$sku'"; //sku
            $csv[$i][] = "'configurable'"; //type
            $csv[$i][] = "'Обувь'"; //attribut_set
            $csv[$i][] = "'Taxable Goods'"; //tax_class_id
            $csv[$i][] = "'Включено'"; //status
            $csv[$i][] = "'2'"; //weight
            $csv[$i][] = "'Товар арт. $sku'"; //name
            $csv[$i][] = "'$price_global'"; //price
            $csv[$i][] = "''"; //description
            $csv[$i][] = "''"; //short description
            $csv[$i][] = "$cat"; //category_ids
            $csv[$i][] = "'Каталог, поиск'"; //visibilitys
            $csv[$i][] = "'1'"; //is_in_stock
            $csv[$i][] = "'" . $qty . "'"; //qty
            $csv[$i][] = "'base'"; //websites
            $csv[$i][] = "'default'"; //store_id
            $csv[$i][] = $image; //image
            $csv[$i][] = $image; //small_image
            $csv[$i][] = $image; //thumbnail
            $csv[$i][] = "$sku"; //artikul
            $csv[$i][] = "$brand"; //brand
            $csv[$i][] = "$season"; //season
            $csv[$i][] = "$character"; //character
            $csv[$i][] = "$gender"; //gender
            $csv[$i][] = "$model"; //model
            $csv[$i][] = "$color"; //color
            $csv[$i][] = "$dop"; //dop
            $csv[$i][] = "'" . trim($result[$id]['size']) . "'"; //size
            $csv[$i][] = "'color,gender,size'";
            $csv[$i][] = "'$simples_skus'"; //size
            $csv[$i][] = "'$size'"; //size
            $i++;
        }        

        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, ",");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);

        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'import.csv', $data);
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'import.csv');
        //$url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/3/files/import.csv/');
        //header('Location: '.$url);
        
        $html = file_get_contents('http://collerya.bget.ru/magmi/web/magmi_run.php?profile=default&mode=create&engine=magmi_productimportengine:Magmi_ProductImportEngine');        
        //file_get_contents('http://ortodon:8888/magmi/web/magmi_run.php?profile=default&mode=create&engine=magmi_productimportengine:Magmi_ProductImportEngine');
        echo $html;
        die();
        $this->_redirectUrl($url);


        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''"; //articul
            $csv[$i - 2][] = "'simple'"; //type
            $csv[$i - 2][] = "'kanc'"; //attribut_set
            $csv[$i - 2][] = "'Отсутствует'"; //tax_class_id
            $csv[$i - 2][] = "'Включено'"; //status
            $csv[$i - 2][] = "'1'"; //weight\
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'"; //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'"; //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'"; //price
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, K)) . "'"; //description
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, K)) . "'"; //short_description
            $csv[$i - 2][] = "'Каталог, поиск'"; //visibility
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'"; //category_ids
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'"; //year
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'"; //qty
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'"; //size
            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'"; //sheet

            $sku1 = str_replace(",", "", $data->val($i, B));
            $sku1 = str_replace(".", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'kanc' . DS; //задаём имя директории
            if (is_dir($dir)) { //проверяем наличие директории
                $files = scandir($dir); //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

                    //                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/kanc/" . $sku . ".jpg'"; //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "'/kanc/first.jpg'"; //image
                $csv[$i - 2][] = "'/kanc/first.jpg'"; //small image
                $csv[$i - 2][] = "'/kanc/first.jpg'"; //thumbnail
            } else {
                $csv[$i - 2][] = $path; //image
                $csv[$i - 2][] = $path; //small image
                $csv[$i - 2][] = $path; //thumbnail
            }
            $find_sku = '0';
            if (in_array($data->val($i, B), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'"; //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }
            $csv[$i - 2][] = "'1'"; //is in stock
            $csv[$i - 2][] = "'base'"; //websites
            $csv[$i - 2][] = "'" . $data->val($i, D) . "'"; //upakovka
            $csv[$i - 2][] = "'" . $data->val($i, G) . "'"; //format
            $csv[$i - 2][] = "'" . $data->val($i, M) . "'"; //listov_be
        }

        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', $data);
        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/3/files/kanc.csv/');
        $this->_redirectUrl($url);
    }

    public function booksparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filebooks']['tmp_name']);
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''"; //articul
            $csv[$i - 2][] = "'simple'"; //type
            $csv[$i - 2][] = "'books'"; //attribut_set
            $csv[$i - 2][] = "'Отсутствует'"; //tax_class_id
            $csv[$i - 2][] = "'Включено'"; //status
            $csv[$i - 2][] = "'1'"; //weight
            $csv[$i - 2][] = "'" . trim($data->val($i, K)) . "'"; //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'"; //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'"; //price
            $csv[$i - 2][] = "'Каталог, поиск'"; //visibility
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'"; //category_ids
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'"; //year
            $csv[$i - 2][] = "'" . trim($data->val($i, N)) . "'"; //qty

            $sku1 = str_replace(",", "", $data->val($i, K));
            $sku1 = str_replace(",", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'books' . DS; //задаём имя директории
            if (is_dir($dir)) { //проверяем наличие директории
                $files = scandir($dir); //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

                    //                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/books/" . $sku . ".jpg'"; //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "'/books/first.jpg'"; //image
                $csv[$i - 2][] = "'/books/first.jpg'"; //small image
                $csv[$i - 2][] = "'/books/first.jpg'"; //thumbnail
            } else {
                $csv[$i - 2][] = $path; //image
                $csv[$i - 2][] = $path; //small image
                $csv[$i - 2][] = $path; //thumbnail
            }

            $csv[$i - 2][] = "'1'"; //is_in_stock
            $csv[$i - 2][] = "'base'"; //websites
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'"; //author
            $csv[$i - 2][] = "'" . trim($data->val($i, D)) . "'"; //dopizd
            $csv[$i - 2][] = "'" . trim($data->val($i, G)) . "'"; //standart
            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'"; //str
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'"; //pereplet
            $csv[$i - 2][] = "'" . trim($data->val($i, J)) . "'"; //isbn
            $csv[$i - 2][] = "'" . trim($data->val($i, M)) . "'"; //top
            $csv[$i - 2][] = "'" . trim($data->val($i, O)) . "'"; //format
            $csv[$i - 2][] = "'" . trim($data->val($i, P)) . "'"; //paper
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'"; //series
            $find_sku = '0';
            if (in_array($data->val($i, K), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'"; //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }
            $descr = str_replace("\r\n", '', $data->val($i, Q));
            $descr = str_replace("\n", '', $data->val($i, Q));
            $csv[$i - 2][] = "'" . $descr . "'"; //description
            $csv[$i - 2][] = "'" . $descr . "'"; //short_description
        }


        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'books.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'books.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'books.csv', $data);


        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/7/files/books.csv/');
        $this->_redirectUrl($url);
    }

    public function kidsparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filekids']['tmp_name']);
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''"; //articul
            $csv[$i - 2][] = "'simple'"; //type
            $csv[$i - 2][] = "'kidsa'"; //attribut_set
            $csv[$i - 2][] = "'Отсутствует'"; //tax_class_id
            $csv[$i - 2][] = "'Включено'"; //status
            $csv[$i - 2][] = "'1'"; //weight
            $csv[$i - 2][] = "'" . trim($data->val($i, K)) . "'"; //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'"; //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'"; //price
            $csv[$i - 2][] = "'Каталог, поиск'"; //visibility
            $csv[$i - 2][] = "'198'"; //category_ids ****
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'"; //year
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'"; //qty


            $csv[$i - 2][] = "'1'"; //is_in_stock
            $csv[$i - 2][] = "'base'"; //websites
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'"; //series
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'"; //author
            $csv[$i - 2][] = "'" . trim($data->val($i, D)) . "'"; //dopizd
            $csv[$i - 2][] = "'" . trim($data->val($i, G)) . "'"; //upakovka

            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'"; //str
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'"; //pereplet
            $csv[$i - 2][] = "'" . trim($data->val($i, J)) . "'"; //isbn

            $csv[$i - 2][] = "'" . trim($data->val($i, M)) . "'"; //format
            $csv[$i - 2][] = "'" . trim($data->val($i, N)) . "'"; //paper
            $find_sku = '0';
            if (in_array($data->val($i, K), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'"; //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }


            $descr = str_replace("\r\n", '', $data->val($i, O));
            $descr = str_replace("\n", '', $data->val($i, O));
            $csv[$i - 2][] = "'" . $descr . "'"; //description
            $csv[$i - 2][] = "'" . $descr . "'"; //short_description
            $sku1 = str_replace(",", "", $data->val($i, K));
            $sku1 = str_replace(",", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'kids' . DS; //задаём имя директории
            if (is_dir($dir)) { //проверяем наличие директории
                $files = scandir($dir); //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

                    //                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/kids/" . $sku . ".jpg'"; //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "''"; //image
                $csv[$i - 2][] = "''"; //small image ****
                $csv[$i - 2][] = "''"; //thumbnail
            } else {
                $csv[$i - 2][] = $path; //image
                $csv[$i - 2][] = $path; //small image
                $csv[$i - 2][] = $path; //thumbnail
            }
        }


        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kids.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kids.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'kids.csv', $data);

        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/14/files/kids.csv/');
        $this->_redirectUrl($url);
    }

    public function suvenirparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filesuvenir']['tmp_name']);
        $found = '0';

        $csv = array();
        $images = array();
        $sku = array();
        $dir = $root . DS . 'media' . DS . 'import' . DS . 'suvenir' . DS; //задаём имя директории
        if (is_dir($dir)) { //проверяем наличие директории
            $files = scandir($dir); //сканируем (получаем массив файлов)
            array_shift($files); // удаляем из массива '.'
            for ($a = 0; $a < sizeof($files); $a++) {
                $image[] = str_replace(".jpg", "", $files[$a]);
            }
        }
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, D));
            $csv[$i - 2][] = "''"; //articul
            $csv[$i - 2][] = "'simple'"; //type
            $csv[$i - 2][] = "'suvenir'"; //attribut_set
            $csv[$i - 2][] = "'Отсутствует'"; //tax_class_id
            $csv[$i - 2][] = "'Включено'"; //status
            $csv[$i - 2][] = "'1'"; //weight
            $csv[$i - 2][] = "'" . $data->val($i, B) . "'"; //sku
            $csv[$i - 2][] = "'" . $data->val($i, A) . "'"; //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'"; //price
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, A)) . "'"; //description
            $csv[$i - 2][] = "'" . str_replace("/n", "", $data->val($i, A)) . "'"; //short_description
            $csv[$i - 2][] = "'Каталог, поиск'"; //visibility
            $csv[$i - 2][] = "'" . $data->val($i, G) . "'"; //category_ids
            $csv[$i - 2][] = "'" . $data->val($i, E) . "'"; //qty

            $sku1 = str_replace(",", "", $data->val($i, B));
            $sku1 = str_replace(".", "", $sku1);
            $sku = $sku1;
            $found = '0';
            if (in_array($sku, $image)) {
                $path = "'/suvenir/" . $sku . ".jpg'"; //image
                $found = '1';
            }

            if ($found == '0') {
                $csv[$i - 2][] = "''"; //image
                $csv[$i - 2][] = "''"; //small image
                $csv[$i - 2][] = "''"; //thumbnail
            } else {
                $csv[$i - 2][] = $path; //image
                $csv[$i - 2][] = $path; //small image
                $csv[$i - 2][] = $path; //thumbnail
            }

            $csv[$i - 2][] = "'1'"; //is_in_stock
            $csv[$i - 2][] = "'base'"; //websites
            $csv[$i - 2][] = "'" . $data->val($i, C) . "'"; //country
            $csv[$i - 2][] = "'" . $data->val($i, F) . "'"; //standart
            $find_sku = '0';
            if (in_array($data->val($i, B), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'"; //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }

            // $csv[$i - 2][] = "'" . str_replace('/r/n', '',$data->val($i, Q)) . "'";                   //description
            // $csv[$i - 2][] = "'" . str_replace('/n', '',$data->val($i, Q)) . "'";                     //short_description
        }
        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv', $data);


        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/8/files/suvenir.csv/');
        $this->_redirectUrl($url);
    }

    public function loadpricekancAction() {
        if (isset($_FILES['pricekanc']['name']) && $_FILES['pricekanc']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'kanc'; //desitnation directory
                $fname = $_FILES['pricekanc']['name']; //file name
                $uploader = new Varien_File_Uploader('pricekanc'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricebooksAction() {
        if (isset($_FILES['pricebooks']['name']) && $_FILES['pricebooks']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'books'; //desitnation directory
                $fname = $_FILES['pricebooks']['name']; //file name
                $uploader = new Varien_File_Uploader('pricebooks'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricesuvenirAction() {
        if (isset($_FILES['pricesuvenir']['name']) && $_FILES['pricesuvenir']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'suvenir'; //desitnation directory
                $fname = $_FILES['pricesuvenir']['name']; //file name
                $uploader = new Varien_File_Uploader('pricesuvenir'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricekidsAction() {
        if (isset($_FILES['pricekids']['name']) && $_FILES['pricekids']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'kids'; //desitnation directory
                $fname = $_FILES['pricekids']['name']; //file name
                $uploader = new Varien_File_Uploader('pricekids'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function editAction() {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('web/web')->load($id);

        if ($model->getId() || $id == 0) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if (!empty($data)) {
                $model->setData($data);
            }

            Mage::register('web_data', $model);

            $this->loadLayout();
            $this->_setActiveMenu('web/items');

            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

            $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);

            $this->_addContent($this->getLayout()->createBlock('web/adminhtml_web_edit'))->_addLeft($this->getLayout()->createBlock('web/adminhtml_web_edit_tabs'));

            $this->renderLayout();
        } else {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('web')->__('Item does not exist'));
            $this->_redirect('*/*/');
        }
    }

    public function newAction() {
        $this->_forward('edit');
    }

    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {

            if (isset($_FILES['filename']['name']) && $_FILES['filename']['name'] != '') {
                try {
                    /* Starting upload */
                    $uploader = new Varien_File_Uploader('filename');

                    // Any extention would work
                    $uploader->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'));
                    $uploader->setAllowRenameFiles(false);

                    // Set the file upload mode 
                    // false -> get the file directly in the specified folder
                    // true -> get the file in the product like folders 
                    //  (file.jpg will go in something like /media/f/i/file.jpg)
                    $uploader->setFilesDispersion(false);

                    // We set media as the upload dir
                    $path = Mage::getBaseDir('media') . DS;
                    $uploader->save($path, $_FILES['filename']['name']);
                } catch (Exception $e) {

                }

                //this way the name is saved in DB
                $data['filename'] = $_FILES['filename']['name'];
            }


            $model = Mage::getModel('web/web');
            $model->setData($data)->setId($this->getRequest()->getParam('id'));

            try {
                if ($model->getCreatedTime == NULL || $model->getUpdateTime() == NULL) {
                    $model->setCreatedTime(now())->setUpdateTime(now());
                } else {
                    $model->setUpdateTime(now());
                }

                $model->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('web')->__('Item was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $model->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('web')->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }

    public function deleteAction() {
        if ($this->getRequest()->getParam('id') > 0) {
            try {
                $model = Mage::getModel('web/web');

                $model->setId($this->getRequest()->getParam('id'))->delete();

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            }
        }
        $this->_redirect('*/*/');
    }

    public function massDeleteAction() {
        $webIds = $this->getRequest()->getParam('web');
        if (!is_array($webIds)) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select item(s)'));
        } else {
            try {
                foreach ($webIds as $webId) {
                    $web = Mage::getModel('web/web')->load($webId);
                    $web->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Total of %d record(s) were successfully deleted', count($webIds)));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function massStatusAction() {
        $webIds = $this->getRequest()->getParam('web');
        if (!is_array($webIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select item(s)'));
        } else {
            try {
                foreach ($webIds as $webId) {
                    $web = Mage::getSingleton('web/web')->load($webId)->setStatus($this->getRequest()->getParam('status'))->setIsMassupdate(true)->save();
                }
                $this->_getSession()->addSuccess($this->__('Total of %d record(s) were successfully updated', count($webIds)));
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    function transliterate($input) {
        $gost = array("Є" => "YE", "І" => "I", "Ѓ" => "G", "і" => "i", "№" => "-", "є" => "ye", "ѓ" => "g", "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ё" => "YO", "Ж" => "ZH", "З" => "Z", "И" => "I", "Й" => "J", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "X", "Ц" => "C", "Ч" => "CH", "Ш" => "SH", "Щ" => "SHH", "Ъ" => "'", "Ы" => "Y", "Ь" => "", "Э" => "E", "Ю" => "YU", "Я" => "YA", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "x", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "", "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => "_", "—" => "_", "," => "_", "!" => "_", "@" => "_", "#" => "-", "$" => "", "%" => "", "^" => "", "&" => "", "*" => "", "(" => "", ")" => "", "+" => "", "=" => "", ";" => "", ":" => "",);
        return strtr($input, $gost);
    }

    function create_category($parentId, $name, $url) {
        $category = new Mage_Catalog_Model_Category();
        $category->setName($name);
        $category->setUrlKey($url);
        $category->setIsActive(1);
        $category->setDisplayMode('PRODUCTS');
        $category->setIsAnchor(0);
        $parentCategory = Mage::getModel('catalog/category')->load($parentId);
        $category->setPath($parentCategory->getPath());
        $category->save();
        return $category->getId();
    }

    function get_category($cat_id) {
        $_category = Mage::getModel('catalog/category')->load($cat_id);
        //$_categories = $_category->getCollection()->addAttributeToSelect(array('name'))->addAttributeToFilter('is_active', false)->addIdFilter($_category->getChildrenCategoriesWithInactive());
        $all_cat = $_category->getChildrenCategoriesWithInactive()->getData();
        foreach ($all_cat as $_category) {
            $root_cat[] = Mage::getModel('catalog/category')->load($_category['entity_id'])->getName();
        }
        return $root_cat;
    }

    function find_category($parentId, $name) {
        $collection = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('name')->addAttributeToFilter('parent_id', $parentId);
        $collect = get_class_methods($collection);
        foreach ($collection as $cat) {
            if ($cat->getName() == $name) {
                return $cat->getId();
            }
        }
    }

    function set_active($categoryId, $flag) {
        $category = Mage::getModel('catalog/category')->load($categoryId);
        $category->setIsActive($flag);
        $category->save();
    }

    function get_all_categories() {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*');
        //foreach($categories->getData() as $data) {
        //    $category = Mage::getModel('catalog/category')->load($data['entity_id']);
        //    $category->setIsActive(false);
        //    $category->save();
        //}                
        return $categories->getData();
    }

    function get_active($categoryId) {
        $category = Mage::getModel('catalog/category')->load($categoryId);
        return $category->getIsActive();
    }

    function set_all_notactive() {
        $collection = Mage::getModel('catalog/category')->getCollection();
        foreach ($collection as $cat) {
            $cat->setIsActive(false);
        }
    }

}
