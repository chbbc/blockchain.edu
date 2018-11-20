# blockchain.edu
Artigos, links e scripts para demonstração de utilização da blockchain.

## Artigos

**Blockchain Service Provider**

https://medium.com/@carlos_49934/blockchain-service-providers-66c6d5c33a65

O papel desse tipo e serviço em levar os benefícios da blockchain às pessoas sem que elas precisem se apropriar da tecnologia ou terem que investir diretamente em criptomoedas.


## Proof of Work

**Objetivo**

Demonstrar, de forma simples, como funciona um algoritmo de prova de trabalho na tentativa de encontrar um determinado hash e provando que para novo zero a dificuldade aumenta exponencialmente.

**Como demonstrar**

Alterando o valor da variável `$qtd_zero` para constatar o aumento e diminuição da dificuldade em achar o referido hash.

O script executa até 100 milhões de *passos* até achar o desafio proposto, essa quantidade pode ser alterada na variável `$tentativas`.

**Arquivo**
`pow.php`

**Dependências**

* php-cli

**Como executar**

```shell
$ php pow.php
```

Resultado esperado:

```
Hash: 6B88C087247AA2F07EE1C5956B8E1A9F4C7F892A70E324F1BB3D161E05CA107B
Quantidade de zeros: 5
Tentativas: 100.000.000
Aguarde...
** Encontrado com o nonce 1.052.288
00000a54805f5dc49276ee530b42075378509ac3cb137da83752ae1a21012206
Duração do script: 1.4352149963379 segundos
```

**Links Diversos**

Desenvolvimento Solidity

http://remix.ethereum.org

Token padrão ERC20 e alguma de suas variações

https://github.com/ConsenSys/Tokens/tree/master/contracts/eip20	

https://github.com/dvdiegoviana/Solidity_Recife_Pratica	

Como consultar URL a partir de um Smart Contract

https://ethereum.stackexchange.com/questions/2/how-can-an-ethereum-contract-get-data-from-a-website

API Javascript do Ethereum

https://github.com/ethereum/wiki/wiki/JavaScript-API	
	
Decompilador de bytecode para Solidity

https://ethervm.io/decompile
