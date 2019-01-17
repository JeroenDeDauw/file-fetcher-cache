<?php

declare( strict_types = 1 );

namespace FileFetcher\Cache;

use FileFetcher\Cache\PackagePrivate\PsrCacheFileFetcher;
use FileFetcher\FileFetcher;
use Psr\SimpleCache\CacheInterface;

/**
 * Public interface of jeroen/file-fetcher-cache.
 *
 * @licence BSD-3-Clause
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Factory {

	/**
	 * Decorator that caches files using psr/simple-cache.
	 * https://packagist.org/packages/psr/simple-cache
	 * https://www.php-fig.org/psr/psr-16/
	 *
	 * @since 1.0
	 *
	 * @param FileFetcher $fetcher
	 * @param CacheInterface $cache
	 * @param \DateInterval|int|null $ttl Time to live. Integer is TTL in seconds
	 *
	 * @return FileFetcher
	 */
	public function newCachingFetcher( FileFetcher $fetcher, CacheInterface $cache, $ttl ): FileFetcher {
		return new PsrCacheFileFetcher(
			$fetcher,
			$cache,
			$ttl
		);
	}

}
