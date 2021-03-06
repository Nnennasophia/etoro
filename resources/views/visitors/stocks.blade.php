@extends("layouts.spacedcustomlayout")

@section("body")

<main class="stocks-content whatweinvestin-page">
	<!-- contents of the page -->
    <section>
    	<div class="paragraph">
    		<h1>what is a stock &quest;</h1>
    		<p>
    			A stock is a type of security that entitles the holder, a fraction of ownership in a company. Through the ownership of this stock, the holder may be granted a portion of a company’s earnings, distributed as dividends. Broadly speaking, there are two main types of stocks, common and preferred. Common stockholders have the right to receive dividends and vote in shareholder meetings, while preferred shareholders have limited or no voting rights. Preferred stockholders typically receive higher dividend payouts, and in the event of a liquidation, a greater claim on assets than common stockholders.
    		</p>
    		<p>
    			Stocks are how ordinary people invest in some of the most successful companies in the world. For companies, stocks are a way to raise money to fund growth, products and other initiatives.
    		</p>
    	</div>
    	<div class="paragraph">
    		<h2>What are stocks and why should you own them &quest;</h2>
    		<p>
    			When you buy the stock of a company, you’re effectively buying an ownership share in that company. Does that mean you get to sit next to Tim Cook at Apple’s next shareholder meeting? No. But in most cases, it does mean you get a right to vote at those meetings, if you choose to exercise it. But the primary reason why investors own stock is to earn a return on their investment. The return, generally comes in two possible ways; The stock’s price appreciates, which means it goes up. You can then sell the stock for a profit if you’d like. The stock pays dividends. Not all stocks pay dividends, but many do. Dividends are payments made to shareholders out of the company’s revenue, and they’re typically paid quarterly. Over the long term, the average annual stock market return is 10%; that average falls to between 7% and 8% after adjusting for inflation. That means $1,000 invested in stocks 30 years ago would be worth over $8,000 today. It’s important to note that that historical return is an average across all stocks in the S&P 500, a collection of around 500 of the biggest companies in the U.S. It doesn’t mean that every stock posted that kind of return, some posted much less or even failed completely. Others posted much higher returns. That’s why it’s wise to buy stock not in just one company, but to build a well-rounded portfolio that includes stocks in many companies across various industries and geographies.
    		</p>
    	</div>
    	<div class="paragraph">
    		<h2>What does it mean when you own stocks &quest;</h2>
    		<p>
    			Most investors own what’s called common stock, which is what is described above. Common stock comes with voting rights, and may pay investors dividends. There are other kinds of stocks, including preferred stocks, which work a bit differently. Again, owning a stock doesn’t mean you carry a lot of weight within the company, or that you get to rub elbows with company bigwigs. It also doesn’t mean that you own a piece of the company’s assets, you aren’t entitled to a parking spot in the company lot or a desk at the company’s headquarters. What you own, essentially, is a share in the company’s profits and, it should be said, its losses. The goal, of course, is for the value of the company and the value of its stock to go up while you’re a shareholder. Generally stocks have a history of high returns, they also come with risk: It’s entirely possible that a stock in your portfolio will go down in value instead. Stock prices fluctuate for a variety of reasons, from overall market volatility to company-specific events, like a communications crisis or a product recall. Many long-term investors hold on to stocks for years, without frequent buying or selling, and while they see those stocks fluctuate over time, their overall portfolio goes up in value over the long term. These investors often own stocks through mutual funds or index funds, which pool many investments together. You can buy a large section of the stock market for example, a stake in all of the companies in the S&P 500 through a mutual fund or index fund.
    		</p>
    	</div>
        <div class="paragraph">
        	<h2>latest market activity</h2>
        	<p>follow latest stock market trends</p>

        	<!-- market widget starts-->
      <div class="widget">
        		<!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
     <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
 </div>
 </div>
 </section>
</main>


@endsection
