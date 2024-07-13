import { Component, Input, OnChanges, SimpleChanges } from '@angular/core';

@Component({
  selector: 'app-gradient-background',
  templateUrl: './gradient-background.component.html',
  styleUrls: ['./gradient-background.component.scss'],
})
export class GradientBackgroundComponent implements OnChanges {
  @Input({ required: true }) height: string = '100%';
  @Input({ required: true }) width: string = '100%';

  ngOnChanges(changes: SimpleChanges): void {
    if (changes['height']) {
      const height = changes['height'].currentValue;
      this.height = height;
    }
    if (changes['width']) {
      const width = changes['width'].currentValue;
      this.width = width;
    }
  }
}
