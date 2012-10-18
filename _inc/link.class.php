<?php
/**
 * Classe para salvar os links invertidos no site Luís Dalmolin
 *
 * @author Luís Dalmolin <luis@escape.ppg.br>
 */
 
class Link {
    
    /**
     * Variaveis da tabela
     * 
     * @access public
     */
    public
        $id, 
        $titulo, 
        $descricao, 
        $link, 
        $dataInsercao, 
        $ip;
    
    
    /**
     * Link invertido
     * 
     * @access public
     */
    public 
        $linkInvertido;
		
    
    /**
     * Construtor
     * 
     * @access public
     * @param $link string
     * @return void
     */
    public function __construct($link = '')
    {
        $this->link = $link;
    }
		
		
    /**
     * Inserindo um novo link
     *
     * @access public
     * @return void
     */
    public function inserir()
    {
        $this->ip = getenv('HTTP_X_FORWARDED_FOR');
        $resLink  = "
            INSERT INTO dal_link (
                titulo, link, dataInsercao, ip
            ) VALUES (
                '".$this->titulo."', 
                '".addslashes( $this->linkInvertido )."', 
                '".date('Y-m-d H:i:s')."', 
                '".$this->ip."' 
            )
        ";
        if( mysql_query( $resLink ) ) {	
            $this->id = mysql_insert_id();

        } else {
            trigger_error("Erro ao inserir o link -> " . mysql_error(), E_USER_ERROR);
        }
    }
	
	
    
    /**
     * Pegando os dados da URL
     *
     * @access protected
     * @return void
     */
    public function dadosUrl()
    {
        $conteudo = @file_get_contents( $this->link );

        preg_match("/<title>(.*?)<\/title>/", $conteudo, $titulo);
        preg_match("/<meta name=\"description\" content=\"(.*?)\" /", $conteudo, $descricao);

        $descricao[0] = str_replace('<meta name="description" content="', '', $descricao[0]);

        $resLinkUpdate = "
            UPDATE dal_link SET
                titulo    = '".$titulo[1]."', 
                descricao = '".$descricao[0]."'
            WHERE id = '".$this->id."'
        ";

        if( !mysql_query( $resLinkUpdate ) ) {
            trigger_error("Erro ao fazer update o link -> " . mysql_error(), E_USER_ERROR);
        }
    }
    
    
    
    /**
     * Invertendo a URL
     * Enquanto não tiver invertido, vai tentando todas as formas 
     * 
     * @access public
     * @return boolean
     */
    public function inverter()
    {
        # inversão 
        if( $this->inverterUrl() ) 
        {
            return true;
        }
        
        # base 64 
        if( $this->inverterBase64() ) 
        {
            return true;
        }
        
        # hexadecimal 
        if( $this->inverterHexaDecimal() ) 
        {
            return true;
        }
        
        return false;
    }
    
    
    
    /**
     * Invertendo a URL
     * 
     * @access protected
     * @return boolean
     */
    protected function inverterUrl()
    {
        $link = strrev( $this->link );
        
        if( filter_var( $link, FILTER_VALIDATE_URL ) ) 
        {
            $this->linkInvertido = $link;
            
            return true;
        }
        
        return false;
    }
    
    
    
    /**
     * Invertendo a URL na base 64
     * 
     * @access protected
     * @return boolean
     */
    protected function inverterBase64()
    {
        $link = base64_decode( $this->link );
        
        if( filter_var( $link, FILTER_VALIDATE_URL ) ) 
        {
            $this->linkInvertido = $link;
            
            return true;
        }
        
        return false;
    }
    
    
    
    /**
     * Invertendo a URL que está no formato hexadecimal
     * 
     * @access protected
     * @return boolean
     */
    protected function inverterHexaDecimal()
    {
        $link = $this->hexToStr( $this->link );
        
        if( filter_var( $link, FILTER_VALIDATE_URL ) ) 
        {
            $this->linkInvertido = $link;
            
            return true;
        }
        
        return false;
    }
    
    
    
    /**
     * Pegando uma string em hexadecimal e convertendo para uma string
     * 
     * @access private
     * @return string
     */
    private function hexToStr($hex)
    {
        $string='';
        for( $i=0; $i < strlen($hex)-1; $i+=2 )
        {
            $string .= chr(hexdec($hex[$i].$hex[$i+1]));
        }
        
        return $string;
    }
	
}