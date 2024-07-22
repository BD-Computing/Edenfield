import { Component, OnInit, Renderer2 } from '@angular/core';
import { ScriptsService } from './shared/services/scripts.service';
// const SCRIPT_PATH = 'https://apis.google.com/js/api.js';
declare let gapi: any;

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
})
export class AppComponent implements OnInit {
  title = 'bimatrust-website';
  constructor(
    private renderer: Renderer2,
    private scriptsService: ScriptsService
  ) {}

  ngOnInit() {
    const dynamicScripts: string[] = [
      'assets/js/lib/popper.min.js',
      'assets/js/lib/bootstrap/bootstrap.min.js',
      'assets/js/lib/isotope.min.js',
      'assets/js/lib/slick.min.js',
      'assets/js/lib/appear.min.js',
      'assets/js/lib/wow.min.js',
      'assets/js/custom-script.js',
      'assets/js/menu.js',
    ];
    // for (let i = 0; i < dynamicScripts.length; i++) {
    //   const node = document.createElement('script');
    //   node.src = dynamicScripts[i];
    //   node.type = 'text/javascript';
    //   node.async = false;
    //   document.getElementsByTagName('head')[0].appendChild(node);
    // }
    // return;
    for (let i = 0; i < dynamicScripts.length; i++) {
      const SCRIPT_PATH = dynamicScripts[i];
      const scriptElement = this.scriptsService.loadJsScript(
        this.renderer,
        SCRIPT_PATH
      );
      scriptElement.onload = () => {
        console.log(SCRIPT_PATH + ' Script loaded');
        // Load the JavaScript client library.
        // (the init() method has been omitted for brevity)
        // gapi.load('client', this.init);
      };
      scriptElement.onerror = () => {
        console.log(`Could not load the ${SCRIPT_PATH} Script!`);
      };
    }
  }
}
