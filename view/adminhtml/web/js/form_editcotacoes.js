/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package NLTecnologia\Correios
 * @author Igor Ludgero Miura <igor@NLTecnologia.com>
 * @copyright Copyright (c) 2017 Imagination Media (https://www.NLTecnologia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

require(["jquery","maskedinput"], function($){

    //Peso
    $('input[name=peso]').mask("99.999");

    //Preço
    $('input[name=valor]').mask("R$ 999.99");

    //Prazo
    $('input[name=prazo]').mask("99");

    //Ceps
    $('input[name=cep_inicio]').mask("99999-999");
    $('input[name=cep_fim]').mask("99999-999");

});