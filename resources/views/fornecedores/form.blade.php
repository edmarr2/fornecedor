<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="fornecedor[user][id]" type="hidden" class="form-control @error('fornecedor[user][id]') is-invalid @enderror" name="fornecedor[users][id]" value="{{ old('fornecedor.user.id') }}" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fornecedor[name]" value="{{ old('fornecedor.name') }}" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="fornecedor[email]" value="{{ old('fornecedor.email') }}" required autocomplete="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mensalidade" class="col-md-4 col-form-label text-md-right">Mensalidade</label>
                    <div class="col-md-6">
                        <input id="mensalidade" type="text" class="form-control @error('mensalidade') is-invalid @enderror" name="fornecedor[mensalidade]" value="{{ old('fornecedor.mensalidade') }}" required autocomplete="email">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>