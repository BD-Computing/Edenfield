import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'currency',
})
export class CurrencyPipe implements PipeTransform {
  /**
   * Formats a number value as a percentage string or currency based on isRatePercentage parameter
   * @param value - The number to format
   * @param isRatePercentage - Whether to format as percentage or currency
   * @returns The formatted string
   */
  transform(value: any, decimals?: number): any {
    return new Intl.NumberFormat('en-KE', {
      style: 'currency',
      currency: 'KES',
      minimumFractionDigits: decimals ? decimals : 0,
    }).format(Number(Math.round(value)));
  }
}
