import { AfterViewInit, Component } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss'],
})
export class NavbarComponent implements AfterViewInit {
  ngAfterViewInit(): void {
    $(function () {
      $('.toggle').on('click', function () {
        if ($('.item').hasClass('active')) {
          $('.item').removeClass('active');
          $(this).find('a').html("<i class='fas fa-bars'></i>");
        } else {
          $('.item').addClass('active');
          $(this).find('a').html("<i class='fas fa-times'></i>");
        }
      });
    });
  }
}
