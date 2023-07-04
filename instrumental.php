
<?php require('header.html'); ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <form action="/config/db.php" method="POST">
    <fieldset>
        <h1>Ficha de Acolhimento Individual</h1>
            <div class="box-dados-iniciais">
                <div class="dados-iniciais">
                    <label for="input-inicial" class="question-objetiva">Nº da ficha:</label>
                    <input class="input-text" id="field" name="numero_da_ficha"/>
                </div>
                <div class="dados-iniciais">
                    <label for="input-inicial" class="question-objetiva">CPF:</label>
                    <input class="input-text input-cpf" id="field" name="cpf" />
                </div>
            </div>
            <div class="dados-iniciais">
                <label class="question-objetiva">1. Qual é o tipo de atendimento realizado?</label>
                <select id="field" name="select-atendimento" class="select select-atendimento" required>
                    <option></option>
                    <option>Teleatendimento psicossocial via SISGEP</option>
                    <option>Teleatendimento psicossocial realizado via demanda espontânea</option>
                    <option>Teleatendimento psicossocial presencial realizado externamente</option>
                    <option>Outro tipo de atendimento realizado</option>
                </select>
                
            </div>
           
            <div class="dados-iniciais">
                <label class="question-objetiva" required>2. Quem procurou ajuda/tratamento?</label>
                <select id="field" class="select select-ajuda">
                    <option></option>
                    <option>Usuário</option>
                    <option>Usuário e família</option>
                    <option>Família</option>
                    <option>Amigos e conhecidos</option>
                    <option>Promotorias de Justiça</option>
                    <option>Técnicos de instituições</option>
                    <option>Outras pessoas</option>
                </select>
            </div>
            
            <div class="box-conhecimento">
                <label class="question-objetiva" required>3. Como ficou sabendo do serviço?</label>
                <input type="text" class="input-text" id="field" />
            </div>  
    </fieldset>

        <fieldset class="dados-sociod">
            <h3>4. Dados Sociodemográficos</h3>
            
                <div class="box-dados-iniciais">
                    <div class="dados-iniciais">
                        <label class="question-objetiva" required>Gênero</label>
                        <select id="select-genero" class="select select-genero" onclick="selectGenero()" name="genero">
                            <option value=""></option>
                            <option value="masculino">Homem</option>
                            <option value="feminino">Mulher</option>
                            <option value="outrogenero"> Outro </option>
                        </select>
                    </div>
                    <!-- <div id="outroGenero" style="display: none;">
                        <label for="input-outro-genero">Qual gênero?</label>
                        <input type="text" id="input-outro-genero" class="input-text" />
                    </div> -->

                    <div class="dados-iniciais">
                        <label class="question-objetiva" required>Você é gestante?</label>
                        <select id="select-genero" class="select select-gestante" onclick="selectGenero()" name="gestante">
                            <option value=""></option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                            <option value="naosabe">Não sabe/não respondeu</option>
                        </select>
                    </div>

                    <div class="dados-iniciais">
                    <label class="question-objetiva" required>Idade</label>
                    <input type="number" class="input-number" min="0" max="150" id="field" name="idade" required />
                </div>
                </div>

                
                
                

                <div class="box-dados">
                    <label class="question-objetiva" required>Você é uma pessoa com deficiência</label>
                    <input type="radio" name="sim"> Sim
                    <input type="radio" name="nao"> Não
                    <input type="radio" name="naosei">Não sabe/não informou
                </div>

                <div class="box-dados">
                    <label class="question-objetiva" required>Endereço:</label>
                    <input type="text" class="input-number" id="field" name="endereco" required />
                </div>


            <div class="box-dados">
                <label class="question-objetiva" required>Bairro:</label>
                <select id="city">
                    <option value="naodefinido"></option>
                    <option value="aerolandia">Aerolândia</option>
                    <option value="aeroporto">Aeroporto</option>
                    <option value="aldeota">Aldeota</option>
                    <option value="altodabalanca">Alto da Balança</option>
                    <option value="alvaroweyne">Álvaro Weyne</option>
                    <option value="ancuri">Ancuri</option>
                    <option value="amadeufurtado">Amadeu Furtado</option>
                    <option value="antoniobezerra">Antonio Bezerra</option>
                    <option value="aracape">Aracapé</option>
                    <option value="austrannunes">Austran Nunes</option>
                    <option value="barradoceara">Barra do Ceará</option>
                    <option value="barroso">Barroso</option>
                    <option value="belavista">Bela Vista</option>
                    <option value="benfica">Benfica</option>
                    <option value="bomfuturo">Bom Futuro</option>
                    <option value="boavista">Boa Vista</option>
                    <option value="bomjardim">Bom Jardim</option>
                    <option value="bonsucesso">Bonsucesso</option>
                    <option value="caisdoporto">Cais do Porto</option>
                    <option value="cajazeiras">Cajazeiras</option>
                    <option value="cambeba">Cambeba</option>
                    <option value="canindezinho">Canindezinho</option>
                    <option value="carlitopamplona">Carlito Pamplona</option>
                    <option value="centro">Centro</option>
                    <option value="cidade2">Cidade 2</option>
                    <option value="cidadedosf">Cidade dos Funcionários</option>
                    <option value="coac">Coacu</option>
                    <option value="coco">Coco</option>
                    <option value="coite">Coité</option>
                    <option value="conjuntoceara1">Conjunto Ceará 1</option>
                    <option value="conjuntoceara2">Conjunto Ceará 2</option>
                    <option value="conjuntoesperanca">Conjunto Esperança</option>
                    <option value="conjuntopalmeiras">Conjunto Palmeiras</option>
                    <option value="coutofernandes">Couto Fernandes</option>
                    <option value="cristoredentor">Cristo Redentor</option>
                    <option value="curio">Curió</option>
                    <option value="damas">Damas</option>
                    <option value="delourdes">De Lourdes</option>
                    <option value="democritorocha">Demócrito Rocha</option>
                    <option value="dende">Dendê</option>
                    <option value="diasmacedo">Dias Macedo</option>
                    <option value="dionisiotorres">Dionísio Torres</option>
                    <option value="domlustosa">Dom Lustosa</option>
                    <option value="dunas">Dunas</option>
                    <option value="edsonqueiroz">Edson Queiroz</option>
                    <option value="fariasbrito">Farias Brito</option>
                    <option value="fatima">Fátima</option>
                    <option value="floresta">Floresta</option>
                    <option value="genibau">Genibaú</option>
                    <option value="guajeru">Guajeru</option>
                    <option value="guararapes">Guararapes</option>
                    <option value="granjaportugal">Granja Portugal</option>
                    <option value="granjalisboa">Granja Lisboa</option>
                    <option value="henriquejorge">Henrique Jorge</option>
                    <option value="itaoca">Itaoca</option>
                    <option value="itaperi">Itaperi</option>
                    <option value="jacarecanga">Jacarecanga</option>
                    <option value="jangurussu">Jangurussu</option>
                    <option value="jardimamerica">Jardim América</option>
                    <option value="jardimcearense">Jardim Cearense</option>
                    <option value="jardimguanabara">Jardim Guanabara</option>
                    <option value="jardimdasoliveiras">Jardim das Oliveiras</option>
                    <option value="jardimiracema">Jardim Miracema</option>
                    <option value="joaquimtavora">Joaquim Távora</option>
                    <option value="joaoxxiii">João XXIII</option>
                    <option value="josebonifacio">José Bonifácio</option>
                    <option value="josedealencar">José de Alencar</option>
                    <option value="lagoaredonda">Lagoa Redonda</option>
                    <option value="lucianocavalcante">Luciano Cavalcante</option>
                    <option value="maraponga">Maraponga</option>
                    <option value="manueldiasbranco">Manuel Dias Branco</option>
                    <option value="meireles">Meireles</option>
                    <option value="messejana">Messejana</option>
                    <option value="montese">Montese</option>
                    <option value="mondubim">Mondubim</option>
                    <option value="montecastelo">Monte Castelo</option>
                    <option value="mourabrasil">Moura Brasil</option>
                    <option value="mucuripe">Mucuripe</option>
                    <option value="novomondubim">Novo Mondubim</option>
                    <option value="otaviobonfim">Otávio Bonfim</option>
                    <option value="olavooliveira">Olavo Oliveira</option>
                    <option value="padreandrade">Padre Andrade</option>
                    <option value="panamericano">Panamericano</option>
                    <option value="papicu">Papicu</option>
                    <option value="paupina">Paupina</option>
                    <option value="parangaba">Parangaba</option>
                    <option value="parreao">Parreão</option>
                    <option value="parquearaxa">Parque Araxá</option>
                    <option value="parquedoisirmaos">Parque Dois Irmãos</option>
                    <option value="parqueiracema">Parque Iracema</option>
                    <option value="parquelandia">Parquelândia</option>
                    <option value="parquemanibura">Parque Manibura</option>
                    <option value="parquesantamaria">Parque Santa Maria</option>
                    <option value="parquesaojose">Parque São José</option>
                    <option value="passare">Passaré</option>
                    <option value="pedras">Pedras</option>
                    <option value="pici">Pici</option>
                    <option value="pirambu">Pirambu</option>
                    <option value="planaltoayrtonsenna">Planalto Ayrton Senna</option>
                    <option value="praiadeiracema">Praia de Iracema</option>
                    <option value="praiadofuturoi">Praia do Futuro I</option>
                    <option value="praiadofuturoii">Praia do Futuro II</option>
                    <option value="prefeitojosewalter">Prefeito José Walter</option>
                    <option value="presidentekennedy">Presidente Kennedy</option>
                    <option value="presidentevargas">Presidente Vargas</option>
                    <option value="quintinocunha">Quintino Cunha</option>
                    <option value="rodolfoteofilo">Rodolfo Teófilo</option>
                    <option value="sabiguaba">Sabiguaba</option>
                    <option value="salinas">Salinas</option>
                    <option value="saobento">São Bento</option>
                    <option value="saogerardo">São Gerardo</option>
                    <option value="saojoaodotauape">São João do Tauape</option>
                    <option value="serrinha">Serrinha</option>
                    <option value="siqueira">Siqueira</option>
                    <option value="varjota">Varjota</option>
                    <option value="vicentepizon">Vicente Pizon</option>
                    <option value="vilaellery">Vila Ellery</option>
                    <option value="vilamanuelsatiro">Vila Manuel Sátiro</option>
                    <option value="vilaperi">Vila Peri</option>
                    <option value="vilavelha">Vila Velha</option>
                    <option value="vilauniao">Vila União</option>
                </select>

                <div class="box-dados">
                    <label class="question-objetiva" required>Em situação de rua</label>
                    <input type="radio" name="sim"> Sim
                    <input type="radio" name="nao"> Não
                    <input type="radio" name="naosei">Não sabe/não informou
                </div>

            <label required>Número de crianças que residem na casa (usuário ou familiar): </label>
            <div class="inputs-numbers--kids" name="kidscasa">
                <input type="number" min="0" class="number-input" id="field" /> <p>Crianças de 0-5 anos</p>
                <input type="number" min="0" class="number-input" id="field" /> <p>Crianças de 6-11 anos</p>
                <input type="number" min="0" class="number-input" id="field" /> <p>Crianças de 12-17 anos</p>
            </div>
        </fieldset>
            
        
        <fieldset>
                <h3>5. Dados de Atenção e Cuidado</h3>
                <label class="question-objetiva">Qual(is) tipo(s) de substâncias psicoativas já fez uso na vida?</label>
                <div class="checkbox-field">
                    <p>Grupo de substâncias: </p>
                    <ul>
                        <li><input type="checkbox" id="field"> Álcool</li>
                        <li><input type="checkbox" id="field"> Tabaco, cigarro, vaping</li>
                        <li><input type="checkbox" id="field"> Crack(Mesclado, pitio, raspa)</li>
                        <li><input type="checkbox" id="field"> Macoha(Shank, haxixe, k2)</li>
                        <li><input type="checkbox" id="field"> Cocaína(Merla, oxi...)</li>
                        </ul>
                        
                        <ul>
                        <li><input type="checkbox" id="field"> Solventes(Cola, loló, lança perfume, anti-respingo de solda)</li> 
                        <li><input type="checkbox" id="field"> Tranquilizantes(Diazepam, rivotril, ripinol...)</li>
                        <li><input type="checkbox" id="field"> Anestésicos(Boa noite cinderela, ketamina)</li>
                        <li><input type="checkbox" id="field"> Alucinógenos sintéticos(LSD, Doce, DMT, aranha)</li> 
                        <li><input type="checkbox" id="field"> Alucinógenos naturais(Cogumelo, zabumba, Ahayuaska, Sto Daime, Ibogaína)</li>
                        </ul>
        
                        <ul>
                        <li><input type="checkbox" id="field"> Anfetaminas(Rebite, speed, ritalina)</li>
                        <li><input type="checkbox" id="field"> Opióides(Remédios para dor, morfina, metadona, tramal)</li>
                        <li><input type="checkbox" id="field"> Ecstasy(Bala, MDMA, MD, Mandy)</li>
                        <li><input type="checkbox" id="field"> Heroína</li>
                        <li><input type="checkbox" id="field"> Não sabe/Não respondeu</li>
                        <li>
                        </ul>
                        
                        <ul>
                        <input type="checkbox" id="field"> Outras(as) <strong>Quais?</strong> <input type="text" class="input-text" id="field"></li>
                    </ul>
                </div>

                <label class="question-objetiva">5.2 Qual é a primeira substância que você fez uso?</label>
                <input type="text" class="input-text" id="field">
                <label class="question-objetiva">5.3 Qual ou quais substâncias faz uso atualmente</label>
                <input type="text" class="input-text" id="field">
                <label class="question-objetiva">5.4 Usa há quanto tempo?</label>
                <input type="text" class="input-text" id="field">
                <label class="question-objetiva">5.5 Quanto tempo após iniciar o uso procurou tratamento pela primeira vez?</label>
                <input type="text" class="input-text" id="field">
                <label class="question-objetiva">5.6 Onde procurou ajuda/tratamento pela primeira vez?</label>
                <input type="text" class="input-text" id="field">

                <label class="question-objetiva">5.7 Qual ou quais órgãos/instituições que faz atendimento a usuários de álcool e/ou outras drogas você já foi atendido?</label>
                <div class="checkbox-field">
                    <ul><li><input type="checkbox" id="field"> CAPS AD</li>
                        <li><input type="checkbox" id="field"> Unidade básica de saúde</li>
                        <li><input type="checkbox" id="field"> SHR AD</li>
                        <li><input type="checkbox" id="field"> Hospital Psiquiátrico</li>
                        <li><input type="checkbox" id="field"> Comunidade terapêutica</li>
                        </ul>
                        <ul>
                        <li><input type="checkbox" id="field"> Instituições religiosas</li>
                        <li><input type="checkbox" id="field"> Atendimento Psicológico</li>
                        <li><input type="checkbox" id="field"> Atendimento Psiquiátrico</li>
                        <li><input type="checkbox" id="field"> Grupos de ajuda mutua</li>
                        <li><input type="checkbox" id="field"> Unidade de acolhimento</li>
                        </ul>
                        <ul>
                            <li><input type="checkbox"> Outro(s)
                                <strong>Qual(is)</strong>
                                <input type="text" class="input-text" id="field">
                            </li> 
                        </ul>
                </div>
                <label class="question-objetiva">5.8 Já pensou em suicídio alguma vez</label>
                <div class="input-radio">
                    <ul class="radio-list">
                        <li><input type="radio" class="radio-input" value="sim" id="field" name='radio'/> Sim
                        </li>
                    <li><input type="radio" class="radio-input" value="nao" id="field" name='radio'/>
                        Não</li>
                        <li><input type="radio"  class="radio-input" value="nao-responder" id="field" name='radio'/>
                            Prefiro não responder.</li>
                    </ul>
                </div>
                

                <label class="question-objetiva">6. Qual é a expectativa do usuário e/ou da família em relação a esse atendimento?</label>
                <div class="checkbox-field">
                <strong>Internação</strong>
                    <ul>
                        <li> <input type="checkbox" id="field"/> Internação voluntária</li>
                        <li><input type="checkbox" id="field"/> Internação involuntária</li>
                        <li><input type="checkbox" id="field"/> Internação compulsória</li>
                    </ul>
                    <ul>
                        <li> <input type="checkbox" id="field"/> Orientação</li>
                        <li> <input type="checkbox" id="field"/> Suporte Psicológico</li>
                        <li> <input type="checkbox" id="field"/> Tratamento na rede intersetorial álcool e drogas municipal</li>
                    </ul>

                    <ul>
                        <li><input type="checkbox" id="field"/> Outra</li> <strong>Qual?(is)</strong> <input type="text" class="input-text" id="field">

                    </ul>
                </div>
                <label class="question-objetiva">7. Gostaria de atendimento presencial na CPDrogas?</label>
                <ul class="radio-list">
                    <li><input type="radio" class="radio-input" value="sim" id="field" name='radio'/> Sim
                    </li>
                <li><input type="radio"  class="radio-input" value="nao" id="field" name='radio'/> Não</li>
                
                </ul>
        </fieldset>

            <fieldset>
                <h5 class="question-objetiva">Relato do atendimento</h5>
                <input type="text" class="input-text" id="field">
                
                <h5 class="question-objetiva">Encaminhamento</h5>
                <input type="text" class="input-text" id="field">

                <p class="question-objetiva">Fortaleza</p> <input type="datetime-local" class="input-text"/>
                <p class="question-objetiva">Profissional responsável pelo acolhimento/encaminhamento</p> <input type="text" class="input-text" id="field">
                <button type="submit" class="btn-submit">Enviar</button>

            </fieldset>
            
    </form>
    </section>
</body>
</html>

<?php require('footer.html'); ?>
