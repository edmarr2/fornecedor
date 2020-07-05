<a href="{{ $link }}" class="card-link">
    <x-card>
            <div class="text-center">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-square fa-stack-2x" style="color: {{ $cor }}"></i>
                    <i class="{{ $icone }} fa-stack-1x fa-inverse"></i>
                </span>
            </div>

            <h4 class="text-center" style="color: {{ $cor }}">
                {!! $descricao !!}
            </h4>
    </x-card>
</a>
