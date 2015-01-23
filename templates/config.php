<?php
/**
 * Contains the template for the configuration file generated by the
 * console command 
 * ```./yii encrypter```
 * 
 * @link http://www.creationgears.com/
 * @copyright Copyright (c) 2015 Nicola Puddu
 * @license http://www.gnu.org/copyleft/gpl.html
 * @package nickcv/yii2-encrypter
 * @author Nicola Puddu <n.puddu@outlook.com>
 */
echo "<?php\n";
?>

return [
    'class'=>'\nickcv\encrypter\components\Encrypter',
    'globalPassword'=>'<?php echo $password; ?>',
    'iv'=>'<?php echo $iv; ?>',
    'useBase64Encoding'=>true,
    'use256BitesEncoding'=>false,
];