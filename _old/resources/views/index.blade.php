@extends('layouts.app')

@section('content')

<main id="main-content">
	<section class="usa-grid usa-section">
		<div class="usa-width-one-whole">
			
		    <h1>Pesquisa Nacional de Leitores de Tela</h1>		    
		    	<p>Bem vindos à primeira pesquisa nacional sobre usos e costumes de leitores de tela por usuários cegos e de baixa visão.</p>
				<p>Estamos neste momento na versão beta, e temos o maior prazer de poder contar com vocês, escolhidos a dedo, para nos ajudar com críticas e sugestões, a fim de tornar a pesquisa o mais completa possível.</p>
				<p>Na última página da pesquisa temos um espaço para que vocês possam deixar seu feedback e nos ajudar com este trabalho que, esperamos, sirva para conhecer as tendências e necessidades dos brasileiros com deficiência.</p>
				<p>A nossa equipe agradece a todos os beta testers pela colaboração!</p>		    
		   
		    <a href="{{ url('/parte1') }}" role="button"  class="usa-button">Iniciar a pesquisa</a>
		
		</div>
    </section>
</main>

@endsection