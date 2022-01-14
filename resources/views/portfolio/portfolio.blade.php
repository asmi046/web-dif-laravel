@section('portfolio_in_main')
    <section class = "margin_section portfolio"  id = "portfolio/portfolio">
        <h2>Наши работы</h2>

        <div class = "center portfolio_bloks">
            
            @foreach ($portfolio as $item)
                <a class = "portBlk2" href = "portfolio/project-tabula.php">
                    
                    <div class = "portInfoBlk2">
                        <h3>{{$item->smile_name}}</h3>
                        <span>{{$item->type}}</span>
                    </div>

                    <div style = "background-image:url(img/portfolio/{{$item->directory}}/{{$item->obl_img}});" class = "portInfoPict"></div>
                
                </a>
            @endforeach

            
            
            
            {{-- <a class = "portBlk2"  href = "portfolio/project-makmol.php">
                    
                        <div class = "portInfoBlk2">
                            <h3>Сайт - Русский ФабрикантЪ</h3>
                            <span>Корпоративный сайт</span>
                        </div>
                    <div style = "background-image:url(img/portfolio/makmol/obl.<?php global $imgRaz; echo $imgRaz; ?>);" class = "portInfoPict"></div>
            </a>
            
            <a class = "portBlk2"  href = "portfolio/project-boeva.php">
                    
                        <div class = "portInfoBlk2">
                            <h3>Сайт - Клубный дом "Боева дача"</h3>
                            <span>Корпоративный сайт</span>
                        </div>
                    <div style = "background-image:url(img/portfolio/boeva/obl.<?php global $imgRaz; echo $imgRaz; ?>);" class = "portInfoPict"></div>
            </a>
            
            <a class = "portBlk2"  href = "portfolio/project-ideastroy.php">
                    
                        <div class = "portInfoBlk2">
                            <h3>Сайт - Идея Строй</h3>
                            <span>Сайт визитка</span>
                        </div>
                    <div style = "background-image:url(img/portfolio/ideastroy/obl.<?php global $imgRaz; echo $imgRaz; ?>);" class = "portInfoPict"></div>
            </a>
            
            <a class = "portBlk2"  href = "portfolio/project-potapov.php">
                    
                        <div class = "portInfoBlk2">
                            <h3>Сайт - PotapovOfficial</h3>
                            <span>Lending Page</span>
                        </div>
                    <div style = "background-image:url(img/portfolio/potapov/obl.<?php global $imgRaz; echo $imgRaz; ?>);" class = "portInfoPict"></div>
            </a>
            
            <a class = "portBlk2"  href = "portfolio/project-zasorovnet.php">
                
                    <div class = "portInfoBlk2">
                        <h3>Сайт - Засоров Нет</h3>
                        <span>Корпоративный сайт</span>
                    </div>
                <div style = "background-image:url(img/portfolio/zasorovnet/obl.<?php global $imgRaz; echo $imgRaz; ?>);" class = "portInfoPict"></div>
            </a> --}}
            
            <!-- -->

            <a href = "https://web-diff.ru/portfolio/" class = "allBtn allBtnCenter buttonEndSection allPortfolioBtn">Показать еще работы</a>
        </div>
        
    </section>
@endsection