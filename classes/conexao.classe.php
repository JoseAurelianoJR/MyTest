<?php

	class Conexao
	{
		private $ConSer;
		private $ConBan;

		public $Servidor = 'localhost';
		public $Porta = 3306;
		public $Usuario = 'root';
		public $Senha = 'root';
		public $Banco = 'my_test';

		public $Query;
		public $NumRegTab;
		public $NumRegSql;

		function __construct() {
       		$this->Conectar();
   		}

		public function Conectar()
		{

			$this -> ConSer = @mysql_connect( $this -> Servidor .':'. $this -> Porta, $this -> Usuario, $this -> Senha );

			if( $this -> ConSer )
			{

				$this -> ConBan = @mysql_select_db( $this -> Banco );

				if( ! $this -> ConBan )
				{

					echo 'Nâo foi possivel conectar no banco de dados. ' . mysql_error();

				}

			}
			else
			{

				echo 'Não foi possivel conectar ao servidor. ' . mysql_error();

			}

		}

		public function Query( $Sql )
		{
			$this -> Query = @mysql_query( $Sql );

			if( $this -> Query )
			{
				return $this -> Query;
			}
			else
			{
				echo 'Erro ao executar a query. ' . mysql_error();
			}

		}

		public function NumRegSql( $Sql )
		{

			$this -> NumRegSql = @mysql_num_rows( $this -> Query( $Sql ) );

			return $this ->NumRegSql;

		}

		
	}

?>
