<div class="sb-sidenav-menu">
    <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="{{route('book.index')}}">
            &#128214;Total Books
        </a>
        <a class="nav-link" href="{{route('author.index')}}">
            &#128214; Total Authors
        </a>
        <a class="nav-link" href="{{route('borrower.index')}}">
            &#128214;Total Borrowers
        </a>
        <a class="nav-link" href="{{route('transaction.index')}}">
            &#128214; Total Transcations
        </a>
        <a class="nav-link" href="{{route('author_book')}}">
            &#128214; Author_Book Relation
        </a>
        <div class="sb-sidenav-menu-heading">Interface</div>
        
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Pages
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="login.html">Login</a>
                        <a class="nav-link" href="register.html">Register</a>
                        <a class="nav-link" href="password.html">Forgot Password</a>
                    </nav>
                </div>
               
            </nav>
        </div>
       
    </div>
</div>
<div class="sb-sidenav-footer">
    <div class="small">Logged in as:</div>
    Start Bootstrap
</div>