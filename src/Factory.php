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
	 *
	 * @since 1.0
	 */
	public function newCachingFetcher( FileFetcher $fetcher, CacheInterface $cache, int $ttl ): FileFetcher {
		return new PsrCacheFileFetcher(
			$fetcher,
			$cache
			// TODO
		);
	}

}
