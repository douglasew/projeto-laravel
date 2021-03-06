                <h2>Dados pessoais</h2>

                <div class="col-md-4">
                    <label class="form-label">Nome completo</label>
                    <input
                        type="text"
                        placeholder="Maria da silva"
                        class="form-control"
                        name="nome"
                        value="{{old('nome', $paciente['nome'])}}"
                        
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">E-mail</label>
                    <input
                        type="email"
                        placeholder="name@example.com"
                        class="form-control"
                        name="email"
                        value="{{old('email', $paciente['email'])}}"
                        
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Telefone</label>
                    <input
                        type="text"
                        placeholder="(11) 2222-3333"
                        pattern="({2}){4}-{4}"
                        class="form-control"
                        name="telefone"
                        value="{{old('telefone', $paciente['telefone'])}}"
                        
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">CPF</label>
                    <input
                        type="text"
                        placeholder="400.000.021-06"
                        class="form-control"
                        name="cpf"
                        value="{{old('cpf', $paciente['cpf'])}}"
                        
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Sexo</label>
                    <select
                        class="form-select"
                        aria-label="Default select example"
                        required
                        name="sexo"
                        value="{{old('sexo', $paciente['sexo'])}}"
                    >
                        <option selected>Selecione o sexo</option>
                        <option value="F" @if(old('sexo', $paciente['sexo']) == 'F') selected @endif>Feminino</option>
                        <option value="M" @if(old('sexo', $paciente['sexo']) == 'M') selected @endif>Masculino</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Data nascimento</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        name="nascimento" 
                        value="{{old('nascimento', $paciente['nascimento'])}}"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">RG</label>
                    <input
                        type="text"
                        placeholder="400.000.021-06"
                        class="form-control"
                        name="rg"
                        value="{{old('rg', $paciente['rg'])}}" 
                    />
                </div>

                <h2>Endere??o</h2>

                <div class="col-md-4">
                    <label class="form-label">Cep</label>
                    <input
                        type="text"
                        placeholder="69912-476"
                        class="form-control"
                        id="cep"
                        for="cep"
                        pattern="{5}-{3}"
                        name="cep"
                        value="{{old('cep', $endereco['cep'])}}"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Logradouro</label>
                    <input
                        
                        type="text"
                        class="form-control"
                        id="logradouro"
                        for="logradouro"
                        name="logradouro"
                        value="{{old('logradouro', $endereco['logradouro'])}}"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Bairro</label>
                    <input
                        type="text"
                        
                        class="form-control"
                        id="bairro"
                        for="bairro"
                        name="bairro"
                        value="{{old('bairro', $endereco['bairro'])}}"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Cidade</label>
                    <input
                        type="text"
                        
                        class="form-control"
                        id="localidade"
                        for="localidade"
                        name="localidade"
                        value="{{old('localidade', $endereco['localidade'])}}"
                    />
                </div>
                <div class="col-md-1">
                    <label class="form-label">UF</label>
                    <input
                        type="text"
                        
                        class="form-control"
                        id="uf"
                        for="uf"
                        name="uf"
                        value="{{old('uf', $endereco['uf'])}}"
                    />
                </div>
                <div class="form-group">
                    <label>Complemento</label>
                    <textarea
                        class="form-control"
                        rows="5"
                        style="resize: none";
                        name="complemento"
                        value="{{old('complemento', $endereco['complemento'])}}"
                    ></textarea>
                  </div>
                
                  <h2>Ficha</h2>

                  <div class="col-md-3">
                    <label class="form-label">Alergia</label>
                    <select
                        class="form-select"
                        required
                        name="alergia"
                    >
                        <option value="0" @if(old('alergia', $ficha['alergia']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('alergia', $ficha['alergia']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
                
            
                <div class="col-md-3">
                    <label class="form-label">Uso de medica????o</label>
                    <select
                        class="form-select"
                        required
                        name="medicacao"
                    >
                        <option value="0" @if(old('medicacao', $ficha['medicacao']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('medicacao', $ficha['medicacao']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
                  
                <div class="col-md-3">
                    <label class="form-label">Doen??as</label>
                    <select
                        class="form-select"
                        required
                        name="doenca"
                    >
                        <option value="0" @if(old('doenca', $ficha['doenca']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('doenca', $ficha['doenca']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
                  
                <div class="col-md-3">
                    <label class="form-label">Gestante</label>
                    <select
                        class="form-select"
                        required
                        name="gestante"
                    >
                        <option value="0" @if(old('gestante', $ficha['gestante']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('gestante', $ficha['gestante']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
                  
                <div class="col-md-4">
                    <label class="form-label">Passou por alguma cirurgia</label>
                    <select
                        class="form-select"
                        required
                        name="cirurgia"
                    >
                        <option value="0" @if(old('cirurgia', $ficha['cirurgia']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('cirurgia', $ficha['cirurgia']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Quando se refera a sangramento</label>
                    <select
                        class="form-select"
                        required
                        name="sangramento"
                    >
                        <option value="normal" @if(old('sangramento', $ficha['sangramento']) == 'NORMAL') selected @endif>Normal</option>
                        <option value="execessivo" @if(old('sangramento', $ficha['sangramento']) == 'EXECESSIVO') selected @endif>Execessivo</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Sente falta de ar</label>
                    <select
                        class="form-select"
                        required
                        name="falta_de_ar"
                    >
                        <option value="0" @if(old('falta_de_ar', $ficha['falta_de_ar']) == 0) selected @endif>N??o</option>
                        <option value="1" @if(old('falta_de_ar', $ficha['falta_de_ar']) == 1) selected @endif>Sim</option>
                    </select>
                </div>
        