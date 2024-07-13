import {
  AfterViewInit,
  Component,
  HostListener,
  Input,
  OnChanges,
  OnInit,
  SimpleChanges,
} from '@angular/core';

@Component({
  selector: 'app-gradient-background',
  templateUrl: './gradient-background.component.html',
  styleUrls: ['./gradient-background.component.scss'],
})
export class GradientBackgroundComponent implements OnChanges, OnInit {
  height: string = '';
  width: string = '';
  @Input() opacity: number = 0.2;
  @HostListener('window:resize', ['$event'])
  ngOnChanges(changes: SimpleChanges): void {
    if (changes['opacity']) {
      const opacity = changes['opacity'].currentValue;
      this.opacity = +opacity;
    }
  }
  ngOnInit(): void {
    this.getSize();
  }
  onWindowResize() {
    this.getSize();
  }
  getSize() {
    const height = window.innerHeight;
    const width = window.innerWidth;

    this.height = `${height}px`;
    this.width = `${width}px`;
    console.log({ height: this.height, width: this.width });
  }
}
