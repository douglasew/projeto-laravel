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
                        <option selected>Selecione seu sexo</option>
                        <option value="F">F</option>
                        <option value="M">M</option>
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

                <h2>Endereço</h2>

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
                        
                    />
                </div>
                <div class="form-floating">
                    <textarea
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                        name="complemento"
                        

                    ></textarea>
                </div>
               
                <h2>Ficha</h2>
                <label class="form-label" >Alergia</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ficha" value="Não tem alergia" checked>
                      Não
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ficha" value="tem alergia">
                      Sim
                </div>
            