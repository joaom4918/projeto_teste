<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class FornecedorController extends Controller
{
    public function consultarCotacoes()
    {
        // URL do endpoint do serviço SOAP

        $url = 'http://www.huma.com.br/ws2';

        // Corpo da mensagem SOAP
    $soapRequest = <<<XML
            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://www.huma.com.br/ws2">
                <soapenv:Header>
                    <ws:UsernameToken>
                        <Cnpj>86065614080138</Cnpj>
                        <username>supervisao@supezmedica.com.br</username>
                        <password>hm@2k22</password>
                    </ws:UsernameToken>
                </soapenv:Header>
                <soapenv:Body>
                    <ws:consultarNovasCotacoes>
                        <arg0>
                            <cnpjFornecedor>86065614000138</cnpjFornecedor>
                            <detalhesCotacao>
                                <codigoComprador>8784</codigoComprador>
                                <codigoProduto>22818</codigoProduto>
                                <codigoProdutoCliente>43881</codigoProdutoCliente>
                                <descricaoProduto>NOREPINEFRINA SOL IND 2MG/ML 4ML</descricaoProduto>
                                <observacaoComprador></observacaoComprador>
                                <quantidadePedida>4366.8</quantidadePedida>
                                <segmento>MÉDICO/HOSPITALAR</segmento>
                                <unidadeMedida>AMP</unidadeMedida>
                                <codigoComprador>6784</codigoComprador>
                                <codigoProduto>22737</codigoProduto>
                                <codigoProdutoCliente>6449</codigoProdutoCliente>
                                <descricaoProduto>CLORIDRATO DE ETILEFRINA SOL INJ 10MG/ML 1ML</descricaoProduto>
                                <observacaoComprador></observacaoComprador>
                                <quantidadePedida>160.6</quantidadePedida>
                            </detalhesCotacao>
                        </arg0>
                    </ws:consultarNovasCotacoes>
                </soapenv:Body>
            </soapenv:Envelope>
        XML;


        $xml = new SimpleXMLElement($soapRequest);
        $soapArray = $this->xmlToArray($xml);

       
        $response = Http::withHeaders(['Content-Type' => 'text/xml; charset=utf-8'])
            ->post($url, $soapArray);

        $cotacoes=[];
        if ($response->successful()) {
        
            $responseData = $response->body();
            //$xmlResponse = new SimpleXMLElement($responseData);
            // $cotacoes = $xmlResponse->soapenvBody->consultarNovasCotacoesResponse->return->cotacao;
            echo $responseData;
            
        } else {
            
            $errorMessage = $response->body(); 
           

        }
        return view("admin.fornecedores.cotacoes",compact('cotacoes'));
    }

    private function xmlToArray($xml)
    {
        $array = json_decode(json_encode($xml), true);
        return $array;
    }


}
