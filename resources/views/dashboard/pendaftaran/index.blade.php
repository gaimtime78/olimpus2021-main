@extends("layouts.app")

@section("content")
	<h2>Pendaftaran</h2>
	<h3>Catur</h3>
	<p><a href="{{ route('pendaftaran.catur.perorangan.index') }}">Perorangan</a></p>
	<p><a href="{{ route('pendaftaran.catur.beregu.index') }}">Beregu</a></p>
	<h3>Esports</h3>
	<p><a href="{{ route('pendaftaran.esports.pubgmobile.index') }}">PUBG</a></p>
	<p><a href="{{ route('pendaftaran.esports.mobilelegends.index') }}">ML</a></p>
	<p><a href="{{ route('pendaftaran.esports.pointblank.index') }}">PB</a></p>
	<p><a href="{{ route('pendaftaran.esports.dota2.index') }}">DOTA</a></p>
	<h3>Keilmiahan</h3>
	<p><a href="{{ route('pendaftaran.lkti.index') }}">LKTI</a></p>
	<p><a href="{{ route('pendaftaran.debat.index') }}">Debat</a></p>
	<p><a href="{{ route('pendaftaran.esai.index') }}">Esai</a></p>
	<p><a href="{{ route('pendaftaran.speech.index') }}">Speech</a></p>
	<p><a href="{{ route('pendaftaran.poster.index') }}">Poster</a></p>
	<h3>Seni Rupa</h3>
	<p><a href="{{ route('pendaftaran.senirupa.komikstrip.index') }}">Komik Strip</a></p>
	<p><a href="{{ route('pendaftaran.senirupa.senilukis.index') }}">Seni Lukis</a></p>
	<h3>Seni Tari</h3>
	<p><a href="{{ route('pendaftaran.senitari.taritradisional.index') }}">Tari Tradisional</a></p>
	<p><a href="{{ route('pendaftaran.senitari.tarimodern.index') }}">Tari Modern</a></p>
	<h3>Seni Musik</h3>
	<p><a href="{{ route('pendaftaran.senimusik.solovocal.index') }}">Solo Vocal</a></p>
	<p><a href="{{ route('pendaftaran.senimusik.musicgroup.index') }}">Music Group</a></p>
	<h3>Seni Sastra</h3>
	<p><a href="{{ route('pendaftaran.senisastra.ciptapuisi.index') }}">Cipta Puisi</a></p>
	<p><a href="{{ route('pendaftaran.senisastra.bacapuisi.index') }}">Baca Puisi</a></p>
	<p><a href="{{ route('pendaftaran.senisastra.ciptacerpen.index') }}">Cipta Cerpen</a></p>
	<p><a href="{{ route('pendaftaran.senisastra.mhq.index') }}">MHQ</a></p>
	<p><a href="{{ route('pendaftaran.senisastra.mtq.index') }}">MTQ</a></p>
	<h3>Apresiasi</h3>
	<p><a href="{{ route('pendaftaran.dutakampus.index') }}">Duta Kampus</a></p>
@endsection