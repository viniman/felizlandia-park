<nav aria-label="Páginas de resultado de pesquisa de atrações" id="paginacao">
        <ul class="pagination" style="justify-content: center;">
        <li class="page-item">
              <form method="GET">
                <input type='hidden' value="<?=$page-1?>" name="pagination">
                <button type="submit" class="page-link"> < </button>
              </form>
            </li>

            <?php for($y=$page-1;$y<$page-1+$link_per_page && $y <= $total_links; $y++) : ?>

            <?php
              if($y == 0)
              {
                $y = 1;
              } 
            ?>
          <li class="page-item" >  
          <form method="GET">
            <input type='hidden' value="<?=$y?>" name="pagination">
            <button type="submit" class="page-link  <?php if($y == $page){ echo " ativado ";}?>" ><?=$y?></button>
          </form>
          </li>
      <?php endfor; ?>

      

            <li class="page-item">
              <form method="GET">
                <input type='hidden' value="<?=$page+1?>" name="pagination">
                <button type="submit" class="page-link"> > </button>
              </form>
            </li>
          <li class="ml-1 pt-2"><a href="#atracoes-topo">Voltar ao topo</a></li>   
        </ul>
      </nav>
   