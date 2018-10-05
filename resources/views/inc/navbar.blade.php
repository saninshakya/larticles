<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
    	<ul class="nav navbar-nav navbar-right">
    		<li><a href="/articles/create">Create Articles</a></li>
    	</ul>
    </div>
</nav>

